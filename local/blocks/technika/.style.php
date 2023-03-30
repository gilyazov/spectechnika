<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(
	\Bitrix\Landing\Manager::getDocRoot() .
	'/bitrix/modules/landing/blocks/.style.php'
);

return [
	'style' => [
        'video-bg-color' => [
            'name' => 'Цвет текста',
            'type' => 'list',
            'property' => 'color',
            'items' => [
                ['name' => 'Серый', 'value' => 'reviews--bg-grey'],
                ['name' => 'Черный', 'value' => 'section--black'],
                ['name' => 'Белый', 'value' => 'section--white']
            ],
        ],
	],
	'group' => [
		// dont forget add new usage 'background' style in \Bitrix\Landing\Node\StyleImg::STYLES_WITH_IMAGE
	],
];