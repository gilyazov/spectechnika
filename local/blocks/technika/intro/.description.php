<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Слайдер',
        'section' => ['Technika', 'content'],
		'dynamic' => false,
	),
	'cards' => array(
        /*'.main-slider__slide' => [
            'name' => 'Слайд',
            'label' => [
                '.breadcrumbs__link'
            ]
        ]*/
	),
	'nodes' => array(
        '.our-partners__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],

        '.breadcrumbs__link' => [
            'name' => 'Ссылка',
            'type' => 'link'
        ],
	),
    'style' => array(

    )
);