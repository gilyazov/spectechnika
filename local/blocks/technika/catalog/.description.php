<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Список категорий',
        'section' => ['Technika', 'catalog'],
		'dynamic' => false,
	),
	'cards' => array(

	),
	'nodes' => array(
        '.cat-layout__title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],
        '.link-tip__text' => [
            'name' => 'Подпись заголовка',
            'type' => 'text'
        ]
	),
    'style' => array(

    ),
);