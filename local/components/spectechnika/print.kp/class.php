<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Engine\Contract\Controllerable;
class PrintKpComponent extends \CBitrixComponent implements Controllerable
{
    const IBLOCK_ID = 1;

    public function __construct($component = \null)
    {
        \CModule::IncludeModule("iblock");
        parent::__construct($component);
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }

    public function configureActions()
    {
        return [
            'makeZip' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    public function makeZipAction()
    {
        foreach ($this->arParams["ITEMS"] as $arItem){
            $res = \CIBlockElement::GetProperty(self::IBLOCK_ID, $arItem, "sort", "asc", array("CODE" => "OFFER"));
            if ($ob = $res->GetNext())
            {
                $arFiles[] = $ob['VALUE'];
            }
        }
        foreach($arFiles as $iFileID) {
            $arPackFiles[] = $_SERVER["DOCUMENT_ROOT"].CFile::GetPath($iFileID);
        }

        // Архивирование в zip
        $packarc = CBXArchive::GetArchive($_SERVER["DOCUMENT_ROOT"]."/tmp.zip");
        $pRes = $packarc->Pack($arPackFiles);

        return $pRes;
    }

    protected function listKeysSignedParameters()
    {
        return ["ITEMS"];
    }
}