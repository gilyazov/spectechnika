<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Конфигуратор',
        'section' => ['Technika', 'catalog'],
        'dynamic' => false,
        'namespace' => 'technika'
    ),
    'cards' => array(),
    'nodes' => array(
        '.configurator__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.configurator__text' => [
            'name' => 'Описание',
            'type' => 'text'
        ],
    ),
    'style' => array()
);