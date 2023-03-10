<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Landing\Manager;
use Bitrix\Main\Context;


class CatalogSearchBlock extends \Bitrix\Landing\LandingBlock
{
    public function init(array $params = [])
    {
        $request = Context::getCurrent()->getRequest();
        $this->params['SEARCH_REQUEST'] = $request->get('q');
    }
}