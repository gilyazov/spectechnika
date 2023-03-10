<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="catalog cat-layout">
    <div class="section__title visually-hidden">section main title</div>
    <div class="site-container">
        #breadcrumb#
        <div class="cat-layout__body catalog__body">
            <h1 class="h1-text section__title cat-layout__title">Каталог</h1>
            <div class="cat-layout__container">
                <div class="cat-layout__sidebar">
                    <div class="link-tip">
                        <div class="link-tip__head link-tip__head--non-mb">
                            <div class="link-tip__icon">
                                <svg class="icon icon-link-arrow">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#link-arrow"></use>
                                </svg>
                            </div>
                            <div class="link-tip__text">В нашем каталоге присутствуют&nbsp;более</div>
                        </div>
                    </div>
                </div>
                <div class="cat-layout__main cat-entry">
                    <div class="cat-entry__list cat-entry__list--wrap">
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
    </div>
</section>