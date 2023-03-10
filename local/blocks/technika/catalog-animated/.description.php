<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Список категорий с новинками',
        'section' => ['Technika', 'catalog'],
		'dynamic' => false,
	),
	'cards' => array(

	),
	'nodes' => array(
        '.cat-layout__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.link-tip__text' => [
            'name' => 'Подпись заголовка',
            'type' => 'text'
        ],
        '.button-primary' => [
            'name' => 'Кнопка',
            'type' => 'link'
        ],
	),
    'style' => array(

    ),
);