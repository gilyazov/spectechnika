<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;

return array(
	'block' => array(
		'name' => 'Картинка',
        'section' => ['Technika', 'content'],
		'dynamic' => false,
	),

	'nodes' => array(
        'img' => [
            'name' => 'Картинка',
            'type' => 'img',
            'dimensions' => array('maxWidth' => 1920, 'maxHeight' => 1080)
        ],
	),
    'style' => array(

    )
);