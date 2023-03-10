<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Оставьте заявку',
        'section' => ['Technika', 'form'],
		'dynamic' => false,
	),
	'cards' => array(

	),
	'nodes' => array(
        '.form__title' => [
            'name' => 'Заголовок',
            'type' => 'text'
        ],
        '.form__text' => [
            'name' => 'Текст',
            'type' => 'text'
        ],

        'spectechnika:iblock.element.add.form' => array(
            'type' => 'component',
            'extra' => array(
                'editable' => array(
                    'PREFIX' => array(),
                    'THEME' => array(),
                    'USER_MESSAGE_ADD' => array(),
                    'USE_CAPTCHA' => array(),
                    'CUSTOM_TITLE_NAME' => array()
                )
            )
        )
	),
    'style' => array(

    )
);