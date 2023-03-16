<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}


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
            'type' => 'text',
            'textOnly' => true
        ],

        '.link-tip__text' => [
            'name' => 'Подпись заголовка',
            'type' => 'text'
        ],
        '.landing-node-button' => [
            'name' => 'Кнопка',
            'type' => 'link'
        ]
	)
);