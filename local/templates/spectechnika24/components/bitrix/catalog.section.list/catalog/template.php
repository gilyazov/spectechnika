<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?php
    foreach ($arResult['SECTIONS'] as &$arSection)
    {
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
?>
        <div class="cat-entry__item" id="<?php echo $this->GetEditAreaId($arSection['ID']); ?>">
            <a class="cat-entry__link" href="<?php echo $arSection['SECTION_PAGE_URL']; ?>">
                <div class="cat-entry__body">
                    <div class="cat-entry__back-image">
                        <img src="<?=\Technika\Core\Tools::resizeImage($arSection["DETAIL_PICTURE"], 235, 235, true)?>" alt="">
                    </div>
                    <div class="cat-entry__picture-wrapper">
                        <div class="cat-entry__picture">
                            <img src="<?=\Technika\Core\Tools::resizeImage($arSection["PICTURE"]["ID"], 220, 100, true)?>" alt="">
                        </div>
                    </div>
                </div><span class="cat-entry__title"><?php echo $arSection['NAME']; ?></span>
            </a>
        </div>
<?php
    }
?>