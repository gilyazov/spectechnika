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
<div class="categories-menu__list-wrapper swiper">
    <ul class="categories-menu__list swiper-wrapper">
        <?
            foreach ($arResult['SECTIONS'] as &$arSection){
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
        ?>
            <li class="categories-menu__item categories-menu__item--no-list" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
                <a class="categories-menu__link" href="<? echo $arSection['SECTION_PAGE_URL']; ?>">
                    <span class="categories-menu__text"><? echo $arSection['PICTURE']['TITLE']; ?><span class="categories-menu__index-number"><? echo $arSection['ELEMENT_CNT']; ?></span></span>
                    <span class="categories-menu__arrow"><svg class="icon icon-arrow-right"><use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#arrow-right"></use></svg></span>
                </a>
            </li>
        <?
            }
        ?>
    </ul>

    <div class="categories-menu__scrollbar swiper-scrollbar"></div>
</div>