<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Почему спецтехника?',
        'section' => ['Technika', 'content'],
		'dynamic' => false,
	),
	'cards' => array(
        '.slider-layout__item' => [
            'name' => 'Сертификат'
        ],
        '.achievements__item' => [
            'name' => 'Преимущества',
            'label' => [
                '.achievements__item-text'
            ]
        ],
	),
	'nodes' => array(
        '.landing-node-d-title' => [
            'name' => 'Заголовок',
            'type' => 'text',
            'textOnly' => true
        ],
        '.landing-node-d-description' => [
            'name' => 'Преимущество',
            'type' => 'text',
            'textOnly' => true
        ],
        '.landing-node-m-title' => [
            'name' => 'Заголовок(моб.)',
            'type' => 'text',
            'textOnly' => true
        ],
        '.landing-node-m-description' => [
            'name' => 'Преимущество(моб.)',
            'type' => 'text',
            'textOnly' => true
        ],

        '.image-slide__image img' => [
            'name' => 'Сертификат',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 250, 'maxHeight' => 450)
        ],

        '.achievements__title' => [
            'name' => 'Слоган',
            'type' => 'text',
            'textOnly' => true
        ],

        '.achievements__item-text' => [
            'name' => 'Преимущество',
            'type' => 'text',
            'textOnly' => true
        ],
	),
    'style' => array(

    )
);