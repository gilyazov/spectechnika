<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Интро',
        'section' => ['Technika', 'about'],
		'dynamic' => false,
	),
	'cards' => array(
        /*'.breadcrumbs__item' => [
            'name' => 'Хлебные крошки',
            'label' => [
                '.breadcrumbs__link'
            ]
        ]*/
	),
	'nodes' => array(
        '.about-company__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        /*'.breadcrumbs__link' => [
            'name' => 'Ссылка',
            'type' => 'link'
        ]*/
	),
    'style' => array(

    ),
    'attrs' => array(
        '.section' => array(
            'name' => 'Картинка на фоне',
            'type' => 'text',
            'attribute' => 'style'
        )
    )
);