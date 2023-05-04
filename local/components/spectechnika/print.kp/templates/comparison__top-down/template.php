<?
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<a class="comparison__top-down js-print" href="#" data-items="<?=$this->__component->getSignedParameters()?>" onclick="BX.printKP.click(this);">
    <svg class="icon icon-download comparison__top-down-icon" width="24" height="24">
        <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#download"></use>
    </svg><span class="comparison__top-down-text">Скачать сравнение моделей</span>
</a>