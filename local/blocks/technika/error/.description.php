<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Ошибка',
        'section' => ['Technika', 'page'],
		'dynamic' => false,
	),
	'cards' => array(

	),
	'nodes' => array(
        '.error__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.error__text' => [
            'name' => 'Текст',
            'type' => 'text'
        ],
        '.error__btn' => [
            'name' => 'Ссылка',
            'type' => 'link'
        ],
        '.error__img' => [
            'name' => 'Картинка',
            'type' => 'img'
        ]
	),
    'style' => array(

    )
);