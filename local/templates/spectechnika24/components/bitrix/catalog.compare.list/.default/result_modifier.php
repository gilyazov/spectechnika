<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */

$arSelect = Array("ID", "IBLOCK_ID", "PROPERTY_PRICE", "PREVIEW_PICTURE", "DETAIL_TEXT");
$arFilter = Array("ID"=>array_keys($arResult), "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();

    $arResult[$arFields["ID"]]["FIELDS"] = $arFields;
    $arResult[$arFields["ID"]]["PROPS"] = $arProps;
}