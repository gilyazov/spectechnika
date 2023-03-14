<?
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @var CBitrixComponent $component */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<a
    data-items="<?=$this->__component->getSignedParameters()?>"
    class="configurator__tabs-button configurator__tabs-button-next button-primary button-primary--large js-print"
   href="#">
    <span>Распечатать <span class="configurator__tabs-button-next-text">список</span></span>
</a>
