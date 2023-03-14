<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Таблица сравнения',
        'section' => ['Technika', 'catalog'],
        'dynamic' => false,
        'namespace' => 'technika'
    ),
    'cards' => array(),
    'nodes' => array(
        '.comparison__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ]
    ),
    'style' => array()
);