<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Контакты',
        'section' => ['Technika', 'page'],
        'dynamic' => false,
    ),
    'cards' => array(
        '.breadcrumbs__item' => [
            'name' => 'Хлебные крошки',
            'label' => [
                '.breadcrumbs__link'
            ]
        ]
    ),
    'nodes' => array(
        '.contacts__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.breadcrumbs__link' => [
            'name' => 'Ссылка',
            'type' => 'link'
        ],
    ),
    'style' => array()
);