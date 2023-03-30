<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
global $arrFilter;
?>
<section class="search-results category">
    <div class="site-container">
        #breadcrumb#
        <div class="search-results__body">
            <div class="search-results__heading">
                <h1 class="h1-text section__title search-results__title">Результаты поиска</h1>
                <div class="search-results__request">
                    <span class="search-results__request-label">По запросу:&nbsp;</span>
                    <span class="search-results__request-value"><?=$classBlock->get('SEARCH_REQUEST')?></span>
                </div>
            </div>
            <div class="cat-layout__container category__container">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:catalog.filter",
                    "category__sidebar",
                    Array(
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "FIELD_CODE" => array("SECTION_ID", ""),
                        "FILTER_NAME" => "arrFilter",
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "catalog",
                        "LIST_HEIGHT" => "5",
                        "NUMBER_WIDTH" => "5",
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "PREFILTER_NAME" => "preFilter",
                        "PRICE_CODE" => array(),
                        "PROPERTY_CODE" => [
                            "IN_STOCK", "NEW", "DISCOUNTS"
                        ],
                        "SAVE_IN_SESSION" => "N"
                    )
                );?>
                <div class="cat-layout__main category__main" id="ajaxContainer">
                    <?php if($_REQUEST['set_filter'] === 'Y' && $_GET['ajax'] !== 'N') {
                        $GLOBALS['APPLICATION']->RestartBuffer();
                    } ?>

                    <div class="category__control-panel control-panel">
                        <div class="control-panel__filter-button">
                            <button class="button-filter"><span>Фильтры</span>
                                <svg class="icon icon-gear">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#gear"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="control-panel__sorting sorting visually-hidden">
                            <div class="sorting__body">
                                <button class="sorting__current" type="button">
                                    <div class="sorting__text" data-value="Сначала популярные">Сначала популярные</div>
                                    <div class="sorting__icon">
                                        <svg class="icon icon-sort">
                                            <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#sort"></use>
                                        </svg>
                                    </div>
                                </button>
                                <div class="sorting__menu">
                                    <ul class="sorting__list">
                                        <li class="sorting__item">
                                            <a class="sorting__link" href="#" data-value="popular">Сначала популярные</a>
                                        </li>
                                        <li class="sorting__item">
                                            <a class="sorting__link" href="#" data-value="cheepest">Сначала дешевые</a>
                                        </li>
                                        <li class="sorting__item">
                                            <a class="sorting__link" href="#" data-value="expensive">Сначала дорогие</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="control-panel__view-quantity view-quantity">
                            <div class="view-quantity__body">
                                <div class="view-quantity__title"><span>Количество</span><span>на странице</span><span>:</span>
                                </div>
                                <?php
                                $arFilter = [
                                    "IBLOCK_ID" => 1,
                                    "ACTIVE" => "Y"
                                ];
                                $count = CIBlockElement::GetList(false, array_merge($arFilter, $arrFilter), array('IBLOCK_ID'))->Fetch()['CNT'];
                                ?>
                                <button class="view-quantity__button"><span class="view-quantity__span"><?=$count?></span>
                                </button>
                            </div>
                        </div>
                        <div class="control-panel__view-type view-type">
                            <input class="view-type__input" type="radio" hidden name="view-type-input" id="view-type-list">
                            <input class="view-type__input" type="radio" hidden name="view-type-input" id="view-type-grid" checked="checked">
                            <div class="view-type__body">
                                <label class="view-type__button view-type__button--bullets" for="view-type-list">
                                    <svg class="icon icon-bullet-list-text">
                                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#bullet-list-text"></use>
                                    </svg>
                                </label>
                                <label class="view-type__button view-type__button--grid" for="view-type-grid">
                                    <svg class="icon icon-grid-list">
                                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#grid-list"></use>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>

                    <?php
                    $arrFilter = array_merge($arrFilter, [
                        "SEARCHABLE_CONTENT" => "%" . $classBlock->get('SEARCH_REQUEST') . "%"
                    ]);
                    ?>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "category__list",
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
                    );?>
                    <a class="category__add-button button-border-line" href="#"><span class="default-label">Показать ещё</span>
                    </a>

                    <?php if($_REQUEST['set_filter'] === 'Y' && $_GET['ajax'] !== 'N') {
                        die();
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>