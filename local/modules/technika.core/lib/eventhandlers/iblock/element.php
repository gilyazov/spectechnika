<?php


namespace Technika\Core\EventHandlers\Iblock;

use Technika\Core\Crm\Handler;

class Element
{
    public function OnBeforeIBlockElementAddHandler(&$arFields)
    {

    }

    public static function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if ($arFields["ID"] && $arFields['IBLOCK_ID'] == 4) {
            Handler::run($arFields["ID"]);
        }

        /*if ($arFields["ID"] && in_array($arFields['IBLOCK_ID'], [8, 9])) {
            global $APPLICATION;
            $APPLICATION->RestartBuffer();
        }

        if ($arFields["ID"] && $arFields['IBLOCK_ID'] == 8) {
            $arSelect = array("ID", "IBLOCK_ID", "NAME", "IBLOCK_NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
            $arFilter = array("IBLOCK_ID" => $arFields["IBLOCK_ID"], "ID" => $arFields["ID"], "ACTIVE" => "Y");
            $res = \CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
            if ($ob = $res->GetNextElement()) {
                $arFieldsBx = $ob->GetFields();
                $arProps = $ob->GetProperties();

                $sendFields['THEME'] = $arFieldsBx['IBLOCK_NAME'];
                $sendFields['NAME'] = $arFieldsBx['NAME'];

                foreach ($arProps as $prop) {
                    if ($prop['PROPERTY_TYPE'] == 'F') {
                        $sendFields['FIELDS'] .= "<tr><td>$prop[NAME]</td><td><a href='" . \CFile::GetPath($prop["VALUE"]) . "'>Скачать</a></td></tr>";
                    } else {
                        if ($prop['VALUE']) {
                            $sendFields['FIELDS'] .= "<tr><td>$prop[NAME]</td><td>$prop[VALUE]</td></tr>";
                        }
                    }
                }
                $sendFields['FIELDS'] = '<table>' . $sendFields['FIELDS'] . '</table>';
            }

            \Bitrix\Main\Mail\Event::send(array(
                "EVENT_NAME" => "FEEDBACK_FORM",
                "LANGUAGE_ID" => LANGUAGE_ID,
                "MESSAGE_ID" => 7,
                "LID" => SITE_ID,
                "DUPLICATE" => "N",
                "C_FIELDS" => $sendFields
            ));
        }

        if ($arFields["ID"] && in_array($arFields['IBLOCK_ID'], [8, 9])) {
            echo \Bitrix\Main\Web\Json::encode(['ID' => $arFields['ID']]);
            die();
        }*/
    }
}