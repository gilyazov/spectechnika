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
<div class="footer__catalog-links catalog-links">
    <ul class="catalog-links__list">
        <?
            foreach ($arResult['SECTIONS'] as &$arSection){
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                if (!$arSection['ELEMENT_CNT']) continue;
        ?>
            <li class="catalog-links__item" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
                <a class="catalog-links__link primary-link" href="<? echo $arSection['SECTION_PAGE_URL']; ?>">
                    <span class="link-text"><?=$arSection["NAME"]?></span>
                </a>
            </li>
        <?
            }
        ?>
    </ul>
</div>