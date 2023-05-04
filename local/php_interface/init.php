<?
include ("constants.php");
include ("events.php");

define ("BUILD_PATH", '/local/js/build/spectechnika/');
define ("DEFAULT_PATH", $_SERVER['DOCUMENT_ROOT'] . '/local/templates/.default/');
define ("LANDING_DEVELOPER_MODE", true);

Bitrix\Main\Loader::IncludeModule('technika.core');
require_once('functions.php');