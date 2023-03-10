<?php
/*require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/vendor/autoload.php';*/

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler('landing', 'onDemosGetRepository', ['\Technika\Core\EventHandlers\Landing\Template', 'onDemosGetRepositoryHandler']);
$eventManager->addEventHandler('landing', 'onHookExec', ['\Technika\Core\EventHandlers\Landing\Hook', 'onHookExecHandler']);
$eventManager->addEventHandler('landing', 'onGetThemeColors', ['\Technika\Core\EventHandlers\Landing\Theme', 'onGetThemeColors']);
$eventManager->addEventHandler('main', 'OnBeforeProlog', ['\Technika\Core\EventHandlers\Landing\Main', 'OnBeforePrologAddHandler']);

//$eventManager->addEventHandler('iblock', 'OnBeforeIBlockElementAdd', ['\Technika\Core\EventHandlers\Iblock\Element', 'OnBeforeIBlockElementAddHandler']);
$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', ['\Technika\Core\EventHandlers\Iblock\Element', 'OnAfterIBlockElementAddHandler']);


$eventManager->addEventHandler('search', 'OnSearchPrepareFilter', ['\Technika\Core\EventHandlers\Search\Tags', 'OnSearchPrepareFilter']);


$arClasses = array(
    "GoogleReCaptcha" => "classes/GoogleReCaptcha.php",
);
CModule::AddAutoloadClasses("technika.core", $arClasses);