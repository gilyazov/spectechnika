<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/** @var \CMain $APPLICATION */

if (!\Bitrix\Main\Loader::includeModule('landing'))
{
	return;
}

use Bitrix\Main\Page\Asset;

\Bitrix\Landing\Connector\Mobile::prologMobileHit();
$language= \Bitrix\Landing\Manager::getLangISO();
?><!DOCTYPE html>
<html xml:lang="<?= $language;?>" lang="<?= $language;?>" class="<?php $APPLICATION->ShowProperty('HtmlClass');?>">
<head>
    <?php $APPLICATION->ShowProperty('AfterHeadOpen');?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="HandheldFriendly" content="true" >
	<meta name="MobileOptimized" content="width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title><?php $APPLICATION->ShowTitle();?></title>
    <?php
	$APPLICATION->ShowHead();
	$APPLICATION->ShowProperty('MetaOG');
	$APPLICATION->ShowProperty('BeforeHeadClose');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/backend.js");
	?>
</head>
<body class="<?php $APPLICATION->ShowProperty('BodyClass');?>" <?php $APPLICATION->ShowProperty('BodyTag');?>>
<?php
/*
This is commented to avoid Project Quality Control warning
$APPLICATION->ShowPanel();
*/
if(!isEditMode()) {
    $APPLICATION->ShowPanel();
}
?>
<?php $APPLICATION->ShowProperty('Noscript');?>
<?php $APPLICATION->ShowProperty('AfterBodyOpen');?>
<div class="page-wrapper <?php $APPLICATION->ShowProperty('MainClass');?>" <?php $APPLICATION->ShowProperty('MainTag');?>>