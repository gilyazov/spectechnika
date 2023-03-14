<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */

$arSelect = Array("ID", "PROPERTY_PRICE", "PREVIEW_PICTURE");
$arFilter = Array("ID"=>array_keys($arResult), "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();

    $arResult[$arFields["ID"]]["FIELDS"] = $arFields;
}