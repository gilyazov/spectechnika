<?
/** @var array $arParams */
/** @var array $arResult */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init(array("jquery3"));
?>
<div class="configurator__tabs js-tabs-config">
    <div class="configurator__pagination">
        <div class="configurator__pagination-item active">
            <svg class="icon icon-circle-dashed" width="52px" height="52px">
                <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#circle-dashed"></use>
            </svg><span>1</span>
        </div>
        <div class="configurator__pagination-item">
            <svg class="icon icon-circle-dashed" width="52px" height="52px">
                <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#circle-dashed"></use>
            </svg><span>2</span>
        </div>
        <div class="configurator__pagination-item">
            <svg class="icon icon-circle-dashed" width="52px" height="52px">
                <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#circle-dashed"></use>
            </svg><span>3</span>
        </div>
    </div>

    <div class="configurator__tabs-contents">
        <div class="configurator__tabs-content active"><span class="configurator__tabs-content-page-title">1. Выберите тип кузова</span>
            <fieldset class="configurator__tabs-content-body">
                <?foreach ($arResult["CATEGORY"] as $key => $arItem):?>
                    <label class="configurator__tabs-content-body-label">
                        <input class="configurator__tabs-content-body-input visually-hidden" type="radio" value="<?=$arItem["ID"]?>" name="body-type"<?if($key == 0):?> checked="checked"<?endif;?>>
                        <div class="configurator__tabs-content-body-box">
                            <img class="configurator__tabs-content-body-img" src="<?=\Technika\Core\Tools::resizeImage($arItem["PICTURE"], 220, 100, true)?>" alt="Тип кузова"><span class="configurator__tabs-content-body-text"><?=$arItem["NAME"]?></span>
                        </div>
                    </label>
                <?endforeach;?>
            </fieldset>
            <div class="configurator__tabs-buttons">
                <div class="configurator__tabs-button configurator__tabs-button-next button-primary button-primary--large">Далее</div>
            </div>
        </div>
        <div class="configurator__tabs-content"><span class="configurator__tabs-content-page-title">2. Выберите параметры</span>
            <div class="configurator__tabs-content-parameters">
                <div class="configurator__tabs-content-subtitle">Колесная формула</div>
                <fieldset class="configurator__tabs-content-contain">
                    <?foreach ($arResult["WHEEL"] as $key => $arItem):?>
                        <label class="configurator__tabs-content-parameters-label">
                            <input class="configurator__tabs-content-parameters-input visually-hidden" type="radio" value="<?=$arItem?>" name="wheel-formula"<?if($key == 0):?> checked="checked"<?endif;?>>
                            <div class="configurator__tabs-content-parameters-box">
                                <span class="configurator__tabs-content-parameters-text"><?=$arItem?></span>
                            </div>
                        </label>
                    <?endforeach;?>
                </fieldset>
                <div class="configurator__tabs-content-selects">
                    <div class="configurator__tabs-content-select-box">
                        <div class="configurator__tabs-content-subtitle">Тип КМУ</div>
                        <div class="configurator__tabs-content-select">
                            <div class="select">
                                <div class="select__current" tabindex="1">
                                    <?foreach ($arResult["CMU_TYPE"] as $key => $arItem):?>
                                        <div class="select__value">
                                            <input class="select__input" type="radio" id="cmu<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" name="cmu"<?if($key):?> checked="checked"<?endif;?>>
                                            <p class="select__input-text"><?=$arItem["VALUE"]?></p>
                                        </div>
                                    <?endforeach;?>
                                    <div class="select__icon">
                                        <svg class="icon icon-arrow-d">
                                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#arrow-d"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="select__list-wrapper">
                                    <ul class="select__list">
                                        <?foreach ($arResult["CMU_TYPE"] as $key => $arItem):?>
                                            <li>
                                                <label class="select__option" for="cmu<?=$arItem["ID"]?>" aria-hidden="aria-hidden"><?=$arItem["VALUE"]?></label>
                                            </li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="configurator__tabs-content-select-box">
                        <div class="configurator__tabs-content-subtitle">Грузоподъемность</div>
                        <div class="configurator__tabs-content-select">
                            <div class="select">
                                <div class="select__current" tabindex="1">
                                    <?foreach ($arResult["LOAD_CAPACITY"] as $key => $arItem):?>
                                        <div class="select__value">
                                            <input class="select__input" type="radio" id="carrying<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" name="carrying"<?if($key):?> checked="checked"<?endif;?>>
                                            <p class="select__input-text"><?=$arItem["VALUE"]?></p>
                                        </div>
                                    <?endforeach;?>
                                    <div class="select__icon">
                                        <svg class="icon icon-arrow-d">
                                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#arrow-d"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="select__list-wrapper">
                                    <ul class="select__list">
                                        <?foreach ($arResult["LOAD_CAPACITY"] as $key => $arItem):?>
                                            <li>
                                                <label class="select__option" for="carrying<?=$arItem["ID"]?>" aria-hidden="aria-hidden"><?=$arItem["VALUE"]?></label>
                                            </li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="configurator__tabs-content-select-box">
                        <div class="configurator__tabs-content-subtitle">Объём кузова</div>
                        <div class="configurator__tabs-content-select">
                            <div class="select">
                                <div class="select__current" tabindex="1">
                                    <?foreach ($arResult["BODY_VOLUME"] as $key => $arItem):?>
                                        <div class="select__value">
                                            <input class="select__input" type="radio" id="volume<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" name="volume"<?if($key):?> checked="checked"<?endif;?>>
                                            <p class="select__input-text"><?=$arItem["VALUE"]?></p>
                                        </div>
                                    <?endforeach;?>
                                    <div class="select__icon">
                                        <svg class="icon icon-arrow-d">
                                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#arrow-d"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="select__list-wrapper">
                                    <ul class="select__list">
                                        <?foreach ($arResult["BODY_VOLUME"] as $key => $arItem):?>
                                            <li>
                                                <label class="select__option" for="volume<?=$arItem["ID"]?>" aria-hidden="aria-hidden"><?=$arItem["VALUE"]?></label>
                                            </li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="configurator__tabs-buttons">
                <div class="configurator__tabs-button configurator__tabs-button-prev button-border-line"><span>Назад</span>
                </div>
                <div class="configurator__tabs-button configurator__tabs-button-next button-primary button-primary--large js-result"><span>Далее</span>
                </div>
            </div>
        </div>
        <div class="configurator__tabs-content" id="ajaxContainer">
            <?php
            if($_REQUEST['set_filter'] === 'Y' && $_GET['ajax'] !== 'N') {
                $GLOBALS['APPLICATION']->RestartBuffer();

                global $arrFilter;
                $arrFilter = [
                    "SECTION_ID" => $_REQUEST['body_type'],
                    "TAGS" => $_REQUEST['wheel_formula'],
                    "PROPERTY_CMU_TYPE" => $_REQUEST['cmu'],
                    "PROPERTY_LOAD_CAPACITY" => $_REQUEST['carrying'],
                    "PROPERTY_BODY_VOLUME" => $_REQUEST['volume'],
                ];

                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "category__list--row-list",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d F Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("",""),
                        "FILTER_NAME" => "arrFilter",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "catalog",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "10",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("PRICE",""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "TIMESTAMP_X",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );
                die();
            } ?>
        </div>
    </div>
</div>
