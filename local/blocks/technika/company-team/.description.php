<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Контент',
        'section' => ['Technika', 'about'],
		'dynamic' => false,
	),
	'cards' => array(
        '.company-team__list-item' => [
            'name' => 'Список',
            'label' => [
                '.company-team__list-item-text'
            ]
        ]
	),
	'nodes' => array(
        '.cat-layout__container--1 .company-team__text' => [
            'name' => 'Текст слева от описания',
            'type' => 'text'
        ],
        '.cat-layout__container--1 .company-team__desc' => [
            'name' => 'Описание',
            'type' => 'text'
        ],

        '.company-team__img' => [
            'name' => 'Картинка',
            'type' => 'img'
        ],
        '.company-team__img-logo' => [
            'name' => 'Логотип',
            'type' => 'img'
        ],

        '.cat-layout__container--2 .company-team__text' => [
            'name' => 'Текст слева от списка',
            'type' => 'text'
        ],
        '.cat-layout__container--2 .company-team__desc' => [
            'name' => 'Описание списка',
            'type' => 'text'
        ],

        '.company-team__list-item-text' => [
            'name' => 'Текст',
            'type' => 'text'
        ],
	),
    'style' => array(

    )
);