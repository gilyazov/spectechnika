<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Результаты поиска',
        'section' => ['Technika', 'catalog'],
        'dynamic' => false,
        'namespace' => 'technika'
    ),
    'cards' => array(),
    'nodes' => array(
        '.search-results__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
    ),
    'style' => array()
);