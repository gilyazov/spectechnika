<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
use \Technika\Core\Tools;
$itemCount = count($arResult);
$needReload = (isset($_REQUEST["compare_list_reload"]) && $_REQUEST["compare_list_reload"] == "Y");
$idCompareCount = 'compareList'.$this->randString();
$obCompare = 'ob'.$idCompareCount;
$mainClass = 'bx_catalog-compare-list';
if ($arParams['POSITION_FIXED'] == 'Y')
{
	$mainClass .= ' fix '.($arParams['POSITION'][0] == 'bottom' ? 'bottom' : 'top').' '.($arParams['POSITION'][1] == 'right' ? 'right' : 'left');
}
$style = ($itemCount == 0 ? ' style="display: none;"' : '');
?><div id="<?=$idCompareCount; ?>" class="<?=$mainClass; ?> "<?=$style; ?>><?
unset($style, $mainClass);
if ($needReload)
{
	$APPLICATION->RestartBuffer();
}
$frame = $this->createFrame($idCompareCount)->begin('');
if ($itemCount > 0)
{
	?>
    <div class="comparison__top">
        <div class="comparison__top-down-row">
            <? $APPLICATION->IncludeComponent(
                "spectechnika:print.kp",
                "comparison__top-down",
                [
                    "ITEMS" => array_keys($arResult)
                ]
            ); ?>
        </div>
        <div class="comparison__top-swiper-row">
            <div class="comparison__top-swiper swiper js-comparison__top-swiper">
                <ul class="swiper-wrapper" data-block="item-list">
                    <?foreach($arResult as $arElement):?>
                        <li class="swiper-slide" data-block="item-row" data-row-id="row<?=$arElement['PARENT_ID']; ?>">
                            <div class="card">
                                <div class="card__body">
                                    <div class="card__image">
                                        <picture>
                                            <source type="image/webp"
                                                    data-srcset="<?=Tools::resizeImage($arElement["FIELDS"]["PREVIEW_PICTURE"], 385, 280, true)?>"
                                                    alt="<?= $arElement["NAME"] ?>"
                                                    srcset="<?=Tools::resizeImage($arElement["FIELDS"]["PREVIEW_PICTURE"], 385, 280, true)?>">
                                            <img class="lazy"
                                                 data-src="<?=Tools::resizeImage($arElement["FIELDS"]["PREVIEW_PICTURE"], 385, 280, true)?>"
                                                 src="#" alt="<?= $arElement["NAME"] ?>">
                                        </picture>
                                    </div>
                                    <div class="card__info">
                                        <div class="card__heading">
                                            <h5 class="card__title"><?=$arElement["NAME"]?></h5>
                                        </div>
                                        <div class="card__bottom">
                                            <div class="card__price"><span><?=$arElement["FIELDS"]["PROPERTY_PRICE_VALUE"]?> ₽</span>
                                            </div>
                                            <div class="card__controls">
                                                <a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="button-primary button-primary--medium">Подробнее</a>
                                                <noindex>
                                                    <a class="card__link primary-link" href="javascript:void(0);" data-id="<?=$arElement['PARENT_ID']; ?>" rel="nofollow">
                                                        <span class="link-text"><?=GetMessage("CATALOG_DELETE")?></span>
                                                    </a>
                                                </noindex>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?endforeach;?>
                </ul>
                <?if($itemCount > 3):?>
                    <div class="comparison__top-swiper-navigation">
                        <button class="comparison__top-swiper-navigation-left next-3">
                            <svg class="icon icon-arrow-r-blue" width="26px" height="15px">
                                <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#arrow-r-blue"></use>
                            </svg>
                        </button>
                        <button class="comparison__top-swiper-navigation-right next-1">
                            <svg class="icon icon-arrow-r-blue" width="26px" height="15px">
                                <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#arrow-r-blue"></use>
                            </svg>
                        </button>
                    </div>
                <?endif;?>
            </div>
        </div>
    </div>

    <ul class="comparison__list">
        <li class="comparison__row">
            <div class="accordion js-accordion active">
                <button class="accordion__head js-accordion-btn" type="button"><span class="accordion__head-text">Основные параметры</span>
                    <svg class="icon icon-arrow-down accordion__head-icon" width="10px" height="6px">
                        <use xlink:href="assets/images/sprites/sprite-mono.svg#arrow-down"></use>
                    </svg>
                </button>
                <div class="accordion__body js-accordion-content">
                    <div class="comparison-table"><span class="comparison-table__text">Название</span>
                        <div class="comparison-table__swiper-row">
                            <div class="comparison-table__swiper swiper js-comparison-table-slider">
                                <ul class="swiper-wrapper">
                                    <?foreach($arResult as $arElement):?>
                                        <li class="swiper-slide comparison-table__elem"><?=$arElement["NAME"]?></li>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comparison-table"><span class="comparison-table__text">Цена</span>
                        <div class="comparison-table__swiper-row">
                            <div class="comparison-table__swiper swiper js-comparison-table-slider">
                                <ul class="swiper-wrapper">
                                    <?foreach($arResult as $arElement):?>
                                        <li class="swiper-slide comparison-table__elem"><?=$arElement["FIELDS"]["PROPERTY_PRICE_VALUE"]?></li>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comparison-table"><span class="comparison-table__text">Описание</span>
                        <div class="comparison-table__swiper-row">
                            <div class="comparison-table__swiper swiper js-comparison-table-slider">
                                <ul class="swiper-wrapper">
                                    <?foreach($arResult as $arElement):?>
                                        <li class="swiper-slide comparison-table__elem"><?=$arElement["FIELDS"]["DETAIL_TEXT"]?></li>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <ul class="comparison__list">
        <li class="comparison__row">
            <div class="accordion js-accordion active">
                <button class="accordion__head js-accordion-btn" type="button"><span class="accordion__head-text">Характеристики</span>
                    <svg class="icon icon-arrow-down accordion__head-icon" width="10px" height="6px">
                        <use xlink:href="assets/images/sprites/sprite-mono.svg#arrow-down"></use>
                    </svg>
                </button>
                <div class="accordion__body js-accordion-content">
                    <?foreach($arResult[array_key_first($arResult)]["PROPS"] as $arProp):?>
                        <?if($arProp["PROPERTY_TYPE"] != "L") continue;?>
                        <div class="comparison-table"><span class="comparison-table__text"><?=$arProp["NAME"]?></span>
                            <div class="comparison-table__swiper-row">
                                <div class="comparison-table__swiper swiper js-comparison-table-slider">
                                    <ul class="swiper-wrapper">
                                        <?foreach($arResult as $arElement):?>
                                            <li class="swiper-slide comparison-table__elem"><?=$arElement["PROPS"][$arProp["CODE"]]["VALUE"]?></li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
        </li>
    </ul>
<?
}
$frame->end();
if ($needReload)
{
	die();
}
$currentPath = CHTTP::urlDeleteParams(
	$APPLICATION->GetCurPageParam(),
	array(
		$arParams['PRODUCT_ID_VARIABLE'],
		$arParams['ACTION_VARIABLE'],
		'ajax_action'
	),
	array("delete_system_params" => true)
);

$jsParams = array(
	'VISUAL' => array(
		'ID' => $idCompareCount,
	),
	'AJAX' => array(
		'url' => $currentPath,
		'params' => array(
			'ajax_action' => 'Y'
		),
		'reload' => array(
			'compare_list_reload' => 'Y'
		),
		'templates' => array(
			'delete' => (mb_strpos($currentPath, '?') === false ? '?' : '&').$arParams['ACTION_VARIABLE'].'=DELETE_FROM_COMPARE_LIST&'.$arParams['PRODUCT_ID_VARIABLE'].'='
		)
	),
	'POSITION' => array(
		'fixed' => $arParams['POSITION_FIXED'] == 'Y',
		'align' => array(
			'vertical' => $arParams['POSITION'][0],
			'horizontal' => $arParams['POSITION'][1]
		)
	)
);
?></div>
<script type="text/javascript">
var <?=$obCompare; ?> = new JCCatalogCompareList(<? echo CUtil::PhpToJSObject($jsParams, false, true); ?>)
</script>