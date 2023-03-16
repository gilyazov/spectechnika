<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="catalog--animated catalog cat-layout cat-layout--animated">
    <div class="section__title visually-hidden">section main title</div>
    <div class="site-container">
        <div class="cat-layout__body">
            <h1 class="h1-text section__title cat-layout__title">Каталог</h1>
            <div class="cat-layout__container">
                <div class="cat-layout__sidebar">
                    <div class="link-tip">
                        <div class="link-tip__head">
                            <div class="link-tip__icon">
                                <svg class="icon icon-link-arrow">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#link-arrow"></use>
                                </svg>
                            </div>
                            <div class="link-tip__text">В нашем каталоге присутствуют&nbsp;более 300 моделей&nbsp;под любые задачи</div>
                        </div>
                        <a class="button-primary landing-node-button" href="/catalog/">смотреть все</a>
                    </div>
                </div>
                <div class="cat-layout__main js-swiper-entry">
                    <div class="cat-layout__head">
                        <div class="cat-layout__button-wrapper">
                            <button class="ads__button ads__button _active button-text" data-value="catalog">Категории</button><span class="ads__counter" data-value="catalog-counter">20</span>
                        </div>
                    </div>
                    <div class="cat-entry__list cat-entry__list--swiper">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:catalog.section.list",
                            "catalog",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "IBLOCK_TYPE" => "catalog",
                                "IBLOCK_ID" => "1",
                                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                                "SECTION_CODE" => "",
                                "COUNT_ELEMENTS" => "N",
                                "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                                "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                                "TOP_DEPTH" => "2",
                                "SECTION_FIELDS" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "SECTION_USER_FIELDS" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "sectionsFilter",
                                "VIEW_MODE" => "LINE",
                                "SHOW_PARENT_NAME" => "Y",
                                "SECTION_URL" => "",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_FILTER" => "N",
                                "ADD_SECTIONS_CHAIN" => "N"
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-layout">
            <div class="slider-layout__body">
                <div class="slider-layout__sidebar"></div>
                <div class="slider-layout__main ads">
                    <div class="ads__body">
                        <div class="ads__head">
                            <div class="ads__button-wrapper">
                                <?php
                                global $arrFilter;
                                $arrFilter = [
                                    "PROPERTY_NEW_VALUE" => "Да",
                                    "IBLOCK_ID" => 1,
                                    "ACTIVE" => "Y"
                                ];
                                $count = CIBlockElement::GetList(false, $arrFilter, array('IBLOCK_ID'))->Fetch()['CNT'];
                                ?>
                                <button class="ads__button _active button-text" data-value="new">Новинки</button><span class="ads__counter" data-counter="new-counter"><?=$count?></span>
                            </div>
                            <div class="ads__button-wrapper">
                                <?php
                                global $arrFilterDiscount;
                                $arrFilterDiscount = [
                                    "PROPERTY_DISCOUNTS_VALUE" => "Да",
                                    "IBLOCK_ID" => 1,
                                    "ACTIVE" => "Y"
                                ];
                                $count = CIBlockElement::GetList(false, $arrFilterDiscount, array('IBLOCK_ID'))->Fetch()['CNT'];
                                ?>
                                <button class="ads__button button-text" data-value="discount">Скидки</button><span class="ads__counter" data-counter="discount-counter"><?=$count?></span>
                            </div>
                        </div>
                        <div class="slider-layout__slider-wrapper ads__outer-wrapper">
                            <div class="slider-layout__slider ads__slider swiper js-swiper-ads" data-path="new">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "slider-layout__list",
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
                                        "FIELD_CODE" => array("TAGS",""),
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
                                );?>
                            </div>
                            <div class="slider-layout__slider ads__slider swiper js-swiper-ads ads__slider--hidden" data-path="discount">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "slider-layout__list",
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
                                        "FIELD_CODE" => array("TAGS",""),
                                        "FILTER_NAME" => "arrFilterDiscount",
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
                                );?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>