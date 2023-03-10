<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Видео',
        'section' => ['Technika', 'page'],
		'dynamic' => false,
	),
	'cards' => array(
        '.breadcrumbs__item' => [
            'name' => 'Хлебные крошки',
            'label' => [
                '.breadcrumbs__link'
            ]
        ]
	),
	'nodes' => array(
        '.video-reviews__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.video-reviews__desc' => [
            'name' => 'Текст',
            'type' => 'text'
        ],

        '.breadcrumbs__link' => [
            'name' => 'Ссылка',
            'type' => 'link'
        ],

        'bitrix:news.list' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PARENT_SECTION' => array(),
                    'INCLUDE_SUBSECTIONS' => array(),
                    'NEWS_COUNT' => array(),
                    'SORT_BY1' => array(),
                    'SORT_ORDER1' => array(),
                    'SORT_BY2' => array(),
                    'SORT_ORDER2' => array()
                )
            )
        )
	),
    'style' => array(

    )
);