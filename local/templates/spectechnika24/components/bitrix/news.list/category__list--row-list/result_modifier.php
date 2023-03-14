<?php
if ($_REQUEST["archive"])
{
    // вывалить в отдельный компонент со входом с айди товаров
    foreach ($arResult["ITEMS"] as $arItem){
        $arFiles[] = $arItem["PROPERTIES"]["OFFER"]["VALUE"];
    }
    foreach($arFiles as $iFileID) {
        $arPackFiles[] = $_SERVER["DOCUMENT_ROOT"].CFile::GetPath($iFileID);
    }

    // Архивирование в zip
    $packarc = CBXArchive::GetArchive($_SERVER["DOCUMENT_ROOT"]."/tmp.zip");
    $pRes = $packarc->Pack($arPackFiles);

    if ($pRes){
        LocalRedirect('/tmp.zip');
    }
}

foreach ($arResult["ITEMS"] as $arItem){
    $arResult["ITEMS_ID"][] = $arItem["ID"];
}