<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Преимущества',
        'section' => ['Technika', 'about'],
        'dynamic' => false,
    ),
    'cards' => array(),
    'nodes' => array(
        '.benefits__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PARENT_SECTION' => array(),
                    'INCLUDE_SUBSECTIONS' => array(),
                    'NEWS_COUNT' => array(),
                    'SORT_BY1' => array(),
                    'SORT_ORDER1' => array(),
                    'SORT_BY2' => array(),
                    'SORT_ORDER2' => array()
                )
            )
        )
    ),
    'style' => array()
);