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
        $arFilter = Array(
            "IBLOCK_ID"=> 1,
            "ACTIVE" => "Y"
        );

        $this->params['SECTION_COUNT'] = \CIBlockSection::GetCount($arFilter);
    }
}