<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Преимущества',
        'section' => ['Technika', 'content'],
		'dynamic' => false,
	),
	'cards' => array(
        '.advantages__item' => [
            'name' => 'Преимущества',
            'label' => [
                '.advantages__text'
            ]
        ]
	),
	'nodes' => array(
        '.advantages__title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],

        '.advantages__text' => [
            'name' => 'Преимущество',
            'type' => 'text',
            'textOnly' => true
        ],
        '.advantages__icon img' => [
            'name' => 'Иконка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 250, 'maxHeight' => 250)
        ],
	),
    'style' => array(

    )
);