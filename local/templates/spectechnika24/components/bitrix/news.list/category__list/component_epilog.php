<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
if (isset($arResult['SECTION']['PATH'][0]['NAME'])){
    \Bitrix\Landing\Manager::setPageTitle($arResult['SECTION']['PATH'][0]['NAME'], true);
}
