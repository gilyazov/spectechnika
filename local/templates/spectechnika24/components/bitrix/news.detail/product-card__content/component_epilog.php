<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
global $APPLICATION;

\Bitrix\Landing\Manager::setPageTitle($arResult['NAME'], true);
$APPLICATION->AddChainItem($arResult['NAME'], "#");
