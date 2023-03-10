<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Лизинг',
        'section' => ['Technika', 'page'],
		'dynamic' => false,
	),
	'cards' => array(
        '.leasing-section__item--big' => [
            'name' => 'Преимущества',
            'label' => [
                '.leasing-section__text'
            ]
        ],
        '.leasing-section__item--small' => [
            'name' => 'Галочки',
            'label' => [
                '.leasing-section__text'
            ]
        ]
	),
	'nodes' => array(
        '.h1-text' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.landing-node-description_desktop' => [
            'name' => 'Описание десктоп',
            'type' => 'text'
        ],
        '.landing-node-description_mobile' => [
            'name' => 'Описание в мобиле',
            'type' => 'text'
        ],
        '.landing-node-title-1' => [
            'name' => 'Подазголовок 1',
            'type' => 'text'
        ],
        '.landing-node-title-2' => [
            'name' => 'Подазголовок 2',
            'type' => 'text'
        ],

        '.leasing-section__span' => [
            'name' => 'Цифра',
            'type' => 'text'
        ],
        '.leasing-section__item--big .leasing-section__text' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.leasing-section__item--small .leasing-section__text' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
	),
    'style' => array(

    )
);