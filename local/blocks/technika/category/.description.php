<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Категория',
        'section' => ['Technika', 'catalog'],
        'dynamic' => false,
        'namespace' => 'technika'
    ),
    'cards' => array(),
    'nodes' => array(
        '.benefits__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        'bitrix:news.detail' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                )
            )
        )
    ),
    'style' => array()
);