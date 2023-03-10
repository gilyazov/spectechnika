<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

return array(
    'block' => array(
        'name' => 'Лизинг партнеры',
        'section' => ['Technika', 'content'],
        'dynamic' => false,
    ),
    'cards' => [
        '.slider-layout__item' => [
            'name' => 'Партнер',
        ],
    ],
    'nodes' => array(
        '.slider-layout__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        'img' => [
            'name' => 'Логотип',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 500, 'maxHeight' => 500)
        ],
    ),
    'style' => array()
);