<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

/**
 * @global \CMain $APPLICATION
 */

global $APPLICATION;

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$strReturn = '';

// if isset main page - unlink
if (
	!empty($arResult) &&
	$arResult[0]['LINK'] == '/'
)
{
	unset($arResult[0]);
}

// insert custom main page
$arResult = array_merge(array(array(
	'LINK' => '#system_mainpage',
	'TITLE' => Loc::getMessage('LANDING_TPL_CHAIN_TPL_MAIN')
)), (array) $arResult);

$arResult = array_values($arResult);

$strReturn .= '<div class="section__breadcrumbs breadcrumbs"><ul class="breadcrumbs__list">';

$outputItems = 0;
$itemSize = count($arResult);

for($index = 0; $index < $itemSize; $index++)
{
	if (!$arResult[$index]["TITLE"])
	{
		continue;
	}

	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	// $nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
	// $child = ($index > 0? ' itemprop="child"' : '');
	$arrow = ($index > 0? '<i class="landing-breadcrumb-arrow fa g-mx-5"></i>' : '');

	if ($arResult[$index]["LINK"] <> "")// && $index != $itemSize-1
	{
		$outputItems++;
		$strReturn .= '
			<li class="breadcrumbs__item"
				itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a class="breadcrumbs__link'.(($index + 1) == $itemSize ? " breadcrumbs__link--active" : "").'"
					href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
					<span class="landing-breadcrumb-name" itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
}

$strReturn .= '</ul></div>';

if ($outputItems <= 1)
{
	$strReturn = '';
}

return $strReturn;
