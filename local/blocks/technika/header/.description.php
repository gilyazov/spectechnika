<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Шапка',
        'section' => ['Technika', 'template'],
		'dynamic' => false,
	),
	'cards' => array(

	),
	'nodes' => array(
        '.header__logo img' => [
            'name' => 'Логотип декстоп',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 250, 'maxHeight' => 50)
        ],
        '.mobile-menu__logo img' => [
            'name' => 'Логотип мобилка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 250, 'maxHeight' => 50)
        ],
	),
    'style' => array(

    ),
);