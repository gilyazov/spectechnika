<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>

<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
	<?foreach($arResult["ITEMS"] as $arItem):
		if(array_key_exists("HIDDEN", $arItem)):
			echo str_replace('type="text"', 'type="hidden"', $arItem["INPUT"]);
		endif;
	endforeach;?>
    <div class="cat-layout__sidebar category__sidebar">
        <div class="category__filters">
            <div class="filters">
                <div class="filters__body">
                    <div class="filters__head">
                        <div class="filters__head-title">Фильтры</div>
                        <a href="<?echo $APPLICATION->GetCurDir()?>" class="filters__clear-button">Очистить</a>
                    </div>
                    <div class="filters__selections">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?if(!array_key_exists("HIDDEN", $arItem)):?>
                                <div class="filters__selection">
                                    <div class="filters__title"><?=$arItem["NAME"]?></div>
                                    <div class="filters__select"><?=$arItem["INPUT"]?></div>
                                </div>
                            <?endif?>
                        <?endforeach;?>
                    </div>
                    <div class="filters__checkboxes">
                        <?foreach($arResult["CHECKBOXES"] as $key => $arItem):?>
                            <?if(!array_key_exists("HIDDEN", $arItem)):?>
                                <div class="filters__checkbox">
                                    <div class="checkbox">
                                        <div class="checkbox__title"><?=$arItem["NAME"]?></div>
                                        <div class="checkbox__wrapper">
                                            <?//=$arItem["INPUT"]?>
                                            <input class="checkbox__input"
                                                   hidden="hidden"
                                                   type="checkbox"
                                                    <?=($arItem['INPUT_VALUE'] == array_key_last($arItem['LIST']) ? ' checked="checked"' : '')?>
                                                   value="<?=array_key_last($arItem['LIST'])?>"
                                                   name="<?=$arItem['INPUT_NAME']?>" id="<?=$key?>">
                                            <label class="checkbox__button" for="<?=$key?>">
                                                <div class="checkbox__switch"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            <?endif?>
                        <?endforeach;?>
                    </div>
                </div>

                <!--<input type="submit" name="set_filter" value="<?php /*=GetMessage("IBLOCK_SET_FILTER")*/?>" />-->
                <input type="hidden" name="set_filter" value="Y" />
                <!--<input type="submit" name="del_filter" value="<?php /*=GetMessage("IBLOCK_DEL_FILTER")*/?>" />-->

                <div class="filters__close-btn">
                    <svg class="icon icon-close">
                        <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#close"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</form>
