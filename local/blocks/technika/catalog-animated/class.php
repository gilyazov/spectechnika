<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Landing\Manager;
use Bitrix\Main\Context;


class CatalogAnimatedBlock extends \Bitrix\Landing\LandingBlock
{
    public function init(array $params = [])
    {
        $sectionFilter = Array(
            "IBLOCK_ID"=> 1,
            "ACTIVE" => "Y"
        );
        $elementFilter["ACTIVE"] = "Y";
        $elementFilter["ACTIVE_DATE"] = "Y";
        $elementFilter["AVAILABLE"] = "Y";

        $rsSections = \CIBlockSection::GetList([], $sectionFilter, false, ["ID"]);
        while($arSection = $rsSections->GetNext()){
            $elementFilter["SECTION_ID"] = $arSection["ID"];
            $elementCnt = \CIBlockElement::GetList(array(), $elementFilter, array());
            if ($elementCnt > 0){
                $arResult["SECTIONS"][] = $arSection;
            }
        }

        $this->params['SECTION_COUNT'] = count($arResult["SECTIONS"]);
    }
}