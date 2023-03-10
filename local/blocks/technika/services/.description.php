<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Услуги',
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
        '.services__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.default-label' => [
            'name' => 'Текст кнопки "Показать"',
            'type' => 'text'
        ],
        '.active-label' => [
            'name' => 'Текст кнопки "Скрыть"',
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
                    'IBLOCK_TYPE' => array(),
                    'IBLOCK_ID' => array(),
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