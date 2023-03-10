<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="section reviews reviews--bg-grey">
    <div class="section__title visually-hidden">section title</div>
    <div class="site-container">
        <div class="slider-layout">
            <div class="slider-layout__title h2-text h2-text--inherit-color">
                Видеообзоры наших моделей
            </div>
            <div class="slider-layout__body">
                <div class="slider-layout__sidebar">
                    <div class="link-tip">
                        <div class="link-tip__head">
                            <div class="link-tip__text">
                                Поддержиаем репутацию среди наших клиентов на высоком уровне
                            </div>
                        </div>
                    </div>
                    <div class="slider-layout__controls">
                        <div class="button-slider-wrapper">
                            <button class="button-slider button-slider--dark button-slider--left offers__button reviews__button--prev"
                                    type="button">
                                <svg class="icon icon-v-arrow-l">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#v-arrow-l"></use>
                                </svg>
                            </button>
                            <button class="button-slider button-slider--dark button-slider--rigth offers__button reviews__button--next"
                                    type="button">
                                <svg class="icon icon-v-arrow-r">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#v-arrow-r"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="slider-layout__main">
                    <div class="slider-layout__slider-wrapper reviews__outer-wrapper">
                        <div class="slider-layout__slider reviews__slider swiper js-swiper-reviews">

                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "video",
                                array(
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
                                    "CACHE_TYPE" => "N",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "Y",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "N",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array("", ""),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "5",
                                    "IBLOCK_TYPE" => "content",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "10",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => "show-more",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "4",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array("Y", ""),
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
                            ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>