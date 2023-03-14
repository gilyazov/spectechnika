<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

class ConfiguratorComponent extends \CBitrixComponent
{
    const IBLOCK_ID = 1;

    public function __construct($component = \null)
    {
        parent::__construct($component);
        \CModule::IncludeModule("iblock");
    }

    private function init()
    {
        $this->initCategory();
        $this->initWheelConfiguration();
        $this->initCmuType();
        $this->initCapacity();
        $this->initBodyVolume();
    }

    private function initCategory()
    {
        $arFilter = Array('IBLOCK_ID'=>self::IBLOCK_ID, 'ACTIVE'=>'Y', 'ID'=>[1, 2, 3, 6]);
        $db_list = \CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);
        while($arSection = $db_list->GetNext())
        {
            $this->arResult['CATEGORY'][] = $arSection;
        }
    }

    private function initWheelConfiguration()
    {
        $this->arResult['WHEEL'] = ["4х2", "4х4", "6х4", "6х6", "8х4"];
    }

    private function initCapacity()
    {
        $this->arResult["LOAD_CAPACITY"][] = ["ID" => "", "VALUE" => "Выберите грузоподъемность"];
        $property_enums = \CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array(
            "IBLOCK_ID"=>self::IBLOCK_ID,
            "CODE"=>"LOAD_CAPACITY"
        ));
        while($enum_fields = $property_enums->GetNext())
        {
            $this->arResult["LOAD_CAPACITY"][] = $enum_fields;
        }
    }

    private function initCmuType()
    {
        $this->arResult["CMU_TYPE"][] = ["ID" => "", "VALUE" => "Выберите тип"];
        $property_enums = \CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array(
            "IBLOCK_ID"=>self::IBLOCK_ID,
            "CODE"=>"CMU_TYPE"
        ));
        while($enum_fields = $property_enums->GetNext())
        {
            $this->arResult["CMU_TYPE"][] = $enum_fields;
        }
    }

    private function initBodyVolume()
    {
        $this->arResult["BODY_VOLUME"][] = ["ID" => "", "VALUE" => "Выберите объем"];
        $property_enums = \CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array(
            "IBLOCK_ID"=>self::IBLOCK_ID,
            "CODE"=>"BODY_VOLUME"
        ));
        while($enum_fields = $property_enums->GetNext())
        {
            $this->arResult["BODY_VOLUME"][] = $enum_fields;
        }
    }


    public function executeComponent()
    {
        $this->init();

        $this->includeComponentTemplate();
    }
}