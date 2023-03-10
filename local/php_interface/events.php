<?php
$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler("iblock", "OnAfterIBlockElementAdd", function(&$arFields) {
    // AddMessage2Log($arFields);

    if ($arFields["ID"] > 0) {
        switch ($arFields["IBLOCK_ID"]) {
            case IBLOCK_ID_FORM: {
                // Здесь логика подписки на рассылку
                CEvent::Send(
                    "FORM",
                    SITE_ID,
                    [
                        "NAME" => $arFields["NAME"],
                        "PHONE" => $arFields["PROPERTY_VALUES"][3],
                        "PAGE" => $arFields["PROPERTY_VALUES"][4]
                    ]
                );
                break;
            }
        }
    }
});