<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);

if (!empty($arResult["ERRORS"])) {
    ShowError(implode("<br />", $arResult["ERRORS"]));
}

if ($arResult["MESSAGE"] <> '') {
    ShowNote($arResult["MESSAGE"]);
}
?>

<form class="form__controls js-form" name="iblock_add" action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" id="form-section">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="iblock_submit_<?=$templateName?>_<?=$arParams["PREFIX"]?>" value="Отправить" />
    <input type="hidden" name="PROPERTY[3][0]" value="<?=$_SERVER['SERVER_NAME'] . $APPLICATION->GetCurPage();?>">
    <input type="hidden" name="PROPERTY[37][0]" value="<?=$arParams["THEME"]?>">

    <?php if (is_array($arResult["PROPERTY_LIST"]) && !empty($arResult["PROPERTY_LIST"])):?>
        <div class="form__inputs">

            <?php foreach ($arResult["PROPERTY_LIST"] as $propertyID):?>
                <div class="form__input-wrapper">
                    <?php
                    if (intval($propertyID) > 0)
                    {
                        if (
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "T"
                            &&
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] == "1"
                        )
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "S";
                        elseif (
                            (
                                $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "S"
                                ||
                                $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "N"
                            )
                            &&
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] > "1"
                        )
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "T";
                    }
                    elseif (($propertyID == "TAGS") && CModule::IncludeModule('search'))
                        $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "TAGS";

                    if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y")
                    {
                        $inputNum = ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) ? count($arResult["ELEMENT_PROPERTIES"][$propertyID]) : 0;
                        $inputNum += $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE_CNT"];
                    }
                    else
                    {
                        $inputNum = 1;
                    }

                    if($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"])
                        $INPUT_TYPE = "USER_TYPE";
                    else
                        $INPUT_TYPE = $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"];

                    $inputName = "";
                    if (intval($propertyID) > 0) {
                        $inputName = $arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"];
                    } else {
                        $inputName = !empty($arParams["CUSTOM_TITLE_".$propertyID]) ? $arParams["CUSTOM_TITLE_".$propertyID] : GetMessage("IBLOCK_FIELD_".$propertyID);
                    }

                    switch ($INPUT_TYPE):
                        case "S":
                        case "N":
                            for ($i = 0; $i<$inputNum; $i++)
                            {
                                if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                {
                                    $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
                                }
                                elseif ($i == 0)
                                {
                                    $value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];

                                }
                                else
                                {
                                    $value = "";
                                }
                                // todo: придумать что-то с типами данных
                                // 1. Имя
                                // 2. Телефон
                                // 3. Текстовое поле
                                // 4. Email
                                // 5. Прочее
                                ?>

                                <?php if(in_array($propertyID, ARRAY_PROPERTY_ID_FIELDS_TYPE_NAME)):?>
                                    <input class="form__input input" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" value="<?=$value?>" type="text" placeholder="<?=$inputName?>" autocomplete="name" <?php if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>required<?php endif?>>
                                <?php elseif (in_array($propertyID, ARRAY_PROPERTY_ID_FIELDS_TYPE_PHONE)): ?>
                                    <input class="form__input input js-input-mask_phone" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" value="<?=$value?>" type="tel" placeholder="<?=$inputName?>" autocomplete="tel" <?php if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>required<?php endif?>>
                                <?php elseif (in_array($propertyID, ARRAY_PROPERTY_ID_FIELDS_TYPE_TEXTAREA)): ?>
                                    <textarea class="form__input input" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" placeholder="<?=$inputName?>" <?php if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>required<?php endif?>><?=$value?></textarea>
                                <?php elseif (in_array($propertyID, ARRAY_PROPERTY_ID_FIELDS_TYPE_EMAIL)): ?>
                                    <input class="form__input input" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" value="<?=$value?>" type="email" placeholder="<?=$inputName?>" autocomplete="email" <?php if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>required<?php endif?>>
                                <?php else: ?>
                                    <input class="form__input input" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" value="<?=$value?>" type="text" placeholder="<?=$inputName?>" autocomplete="on" <?php if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>required<?php endif?>>
                                <?php endif; ?>
                                <?php
                            }
                            break;
                    endswitch;?>

                </div>
            <?php endforeach;?>
        </div>
    <?php endif; ?>

    <?php if($arParams["USE_CAPTCHA"] == "Y" && $arParams["ID"] <= 0):?>
        <div>
            <p><?=GetMessage("IBLOCK_FORM_CAPTCHA_TITLE")?></p>
            <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
            <p><?=GetMessage("IBLOCK_FORM_CAPTCHA_PROMPT")?><span>*</span></p>
            <input class="form__input input" type="text" name="captcha_word" maxlength="50" value="" required>
        </div>
    <?php endif?>

    <div class="form__submit">
        <button class="button-primary button-primary--large button-primary--light js-form-submit" type="submit">Оставить заявку</button>
        <div class="form__submit-text">
            <span>Нажимая кнопку “Оставить заявку” вы соглашаетесь с&nbsp;</span>
            <a href="<?= CFile::GetPath(\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_POLICY"));?>" download>политикой конфиденциальности</a>
        </div>
    </div>
</form>
