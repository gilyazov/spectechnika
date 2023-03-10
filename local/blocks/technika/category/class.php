<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Landing\Manager;

class CatalogSectionBlock extends \Bitrix\Landing\LandingBlock
{
    private int $sectionID;
    private string $code;
    public function init(array $params = [])
    {
        $variables = \Bitrix\Landing\Landing::getVariables();
        $this->code = $variables['sef'][0] ?? "";

        $this->params['SECTION_CODE'] = $this->code;
        $this->params['FILTER_PROPS'] = array_merge($this->getMap($this->code), ["IN_STOCK", "NEW", "DISCOUNTS"]);

        $this->initProps();
    }

    private function initProps()
    {
        $this->initTitle();
        $this->initTags();
    }

    private function initTitle()
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $rsSection = \Bitrix\Iblock\SectionTable::getList(array(
            'order' => [],
            'filter' => array(
                'IBLOCK_ID' => 1,
                'ACTIVE' => 'Y',
                'CODE' => $this->code
            ),
            'select' =>  array(
                'ID',
                'NAME'
            ),
        ));
        if ($arSection = $rsSection->fetch()) {
            $this->sectionID = $arSection["ID"];
            $this->params['SECTION_NAME'] = $arSection["NAME"];
        }
    }

    private function initTags()
    {
        global $APPLICATION;

        $arElements = [];
        $arFilter = Array("IBLOCK_ID"=>1, "SECTION_ID"=>$this->sectionID, "ACTIVE"=>"Y");
        $res = \CIBlockElement::GetList(Array(), $arFilter, false, false, ["ID"]);
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();
            $arElements[] = $arFields["ID"];
        }

        if(CModule::IncludeModule('search'))
        {
            $rsTags = \CSearchTags::GetList(
                array("NAME"),
                array(
                    "MODULE_ID" => "iblock",
                    "SITE_ID" => SITE_ID,
                    "ITEM_ID" => $arElements
                )
            );
            $activeTags = explode("," , $_REQUEST['arrFilter_ff']['TAGS']);
            $this->params['ALL_TAGS'] = '<a class="tag'.(!$_REQUEST['arrFilter_ff']['TAGS'] ? "  tag--active" : "").'" href="'.$APPLICATION->GetCurPageParam(
                    "",
                    array("arrFilter_ff", "set_filter", "ajax")
                ).'">Все</a>';

            while($arTag = $rsTags->Fetch()){
                $url = $APPLICATION->GetCurPageParam(
                    "arrFilter_ff[TAGS]=".$arTag["NAME"]."&set_filter=Y&ajax=N",
                    array("arrFilter_ff", "set_filter", "ajax")
                );
                $isActive = in_array($arTag["NAME"], $activeTags);

                $this->params['TAGS'][] = '<a class="tag'.($isActive ? "  tag--active" : "").'" href="'.$url.'">'.$arTag["NAME"].'</a>';
            }
        }
    }

    private function getMap($code)
    {
        switch ($code) {
            case "kamazy-bortovye-s-kmu":
                return ["CMU_BRAND"];
            case "sedelnye-tyagachi":
                return ["LOAD_CAPACITY_OF_SSA"];
            case "furgony":
                return ["VAN_TYPE"];
            case "zernovozy":
                return ["BODY_TYPE"];
            case "lomovozy":
                return ["GMU_MANUFACTURER"];
            case "samosvaly":
                return ["BODY_VOLUME", "LOAD_CAPACITY"];
            case "sortimentovozy":
                return ["MANUFACTURER"];
            case "avtobetonosmesiteli":
                return ["DRUM_CAPACITY"];
            case "kommunalno-dorozhnaya-tekhnika":
            case "avtotsisterny":
                return ["VIEW"];
            case "avtokrany":
                return ["CRANE_CAPACITY", "MAXIMUM_BOOM_REACH", "MANUFACTURER"];
            case "shassi":
                return ["MOUNTING_FRAME_LENGTH"];
            case "kamazy-bortovye":
                return ["FLATBED_LENGTH"];
            case "vakhtovye-avtobusy":
                return [];
        }
    }
}