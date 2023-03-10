<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Как мы работаем',
        'section' => ['Technika', 'about'],
		'dynamic' => false,
	),
	'cards' => array(
        '.we-working__item' => [
            'name' => 'Список',
            'label' => [
                '.we-working__item-text'
            ]
        ]
	),
	'nodes' => array(
        '.we-working__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.we-working__item-text' => [
            'name' => 'Текст',
            'type' => 'text'
        ],
	),
    'style' => array(

    )
);