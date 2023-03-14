<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<header class="header header header--simple">
    <div class="site-container">
        <div class="header__body">
            <div class="header__cell header__site-controls">
                <div class="site-controls">
                    <ul class="site-controls__list">
                        <li class="site-controls__item">
                            <a class="site-controls__link site-controls__link--catalog primary-link" data-path="cat-popup" href="#">
                                <svg class="icon icon-cat">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#cat"></use>
                                </svg>
                                <svg class="icon icon-closing">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#closing"></use>
                                </svg><span class="link-text">Каталог</span>
                            </a>
                            <div class="modal">
                                <div class="site-container">
                                    <div class="modal__container modal__container--categories" data-target="cat-popup">
                                        <div class="modal__content">
                                            <button class="button-reset modal__close-btn modal-close visually-hidden" type="button">
                                                <svg class="icon icon-delete">
                                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#delete"></use>
                                                </svg>
                                            </button>
                                            <div class="modal__categories-menu">
                                                <div class="categories-menu">
                                                    <div class="categories-menu__head">
                                                        <a href="/catalog/" class="categories-menu__title">Каталог<div class="categories-menu__title-icon">
                                                                <svg class="icon icon-arrow-right">
                                                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#arrow-right"></use>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                        <div class="categories-menu__count"><span class="categories-menu__count-value">150</span><span class="categories-menu__count-text">+ моделей</span>
                                                        </div>
                                                    </div>
                                                    <?$APPLICATION->IncludeComponent(
                                                        "bitrix:catalog.section.list",
                                                        "categories-menu__list-wrapper",
                                                        array(
                                                            "COMPONENT_TEMPLATE" => ".default",
                                                            "IBLOCK_TYPE" => "catalog",
                                                            "IBLOCK_ID" => "1",
                                                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                                                            "SECTION_CODE" => "",
                                                            "COUNT_ELEMENTS" => "Y",
                                                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                                                            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
                                                            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                                                            "TOP_DEPTH" => "1",
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
                                                    <div class="categories-menu__bottom">
                                                        <a class="button-primary button-primary--medium" href="/configurator/">
                                                            <svg class="icon icon-conf">
                                                                <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#conf"></use>
                                                            </svg>КОНФИГУРАТОР
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="site-controls__item">
                            <a class="site-controls__link site-controls__link--compare primary-link" href="/compare/">
                                <svg class="icon icon-compare">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#compare"></use>
                                </svg><span class="link-text">Сравнение</span>
                            </a>
                        </li>
                        <li class="site-controls__item">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:search.form",
                                "modal--search",
                                Array()
                            );?>
                        </li>
                    </ul>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header__nav",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => ".default"
                ),
                false
            );?>
            <div class="modal">
                <div class="site-container">
                    <div class="modal__container modal__container--nav" data-target="nav-popup">
                        <div class="modal__content">
                            <button class="button-reset modal__close-btn modal-close visually-hidden" type="button">
                                <svg class="icon icon-delete">
                                    <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#delete"></use>
                                </svg>
                            </button>
                            <div class="modal__nav-popup nav-popup">
                                <div class="nav-popup__body">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "nav-popup__list",
                                        array(
                                            "ALLOW_MULTI_SELECT" => "N",
                                            "CHILD_MENU_TYPE" => "left",
                                            "DELAY" => "N",
                                            "MAX_LEVEL" => "1",
                                            "MENU_CACHE_GET_VARS" => array(
                                            ),
                                            "MENU_CACHE_TIME" => "3600",
                                            "MENU_CACHE_TYPE" => "N",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "ROOT_MENU_TYPE" => "top",
                                            "USE_EXT" => "N",
                                            "COMPONENT_TEMPLATE" => ".default"
                                        ),
                                        false
                                    );?>
                                    <div class="nav-popup__contacts">
                                        <div class="nav-popup__phone">
                                            <div class="nav-popup__label">По всем вопросам</div>
                                            <a class="nav-popup__number primary-link" href="tel:8 800 550 58 12"><span class="link-text">8 800 550 58 12</span>
                                            </a>
                                        </div>
                                        <div class="nav-popup__address">г. Набережные Челны,<br>Транспортный проезд, 2</div>
                                    </div>
                                    <div class="nav-popup__buttons">
                                        <button class="product-card__button nav-popup__button nav-popup__button--compare">
                                            <svg class="icon icon-comparison">
                                                <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#comparison"></use>
                                            </svg><span>сравнение</span>
                                        </button>
                                        <button class="product-card__button nav-popup__button nav-popup__button--search modal-close">
                                            <svg class="icon icon-search">
                                                <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#search"></use>
                                            </svg><span>поиск</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__cell header__phone">
                <a class="primary-link" href="tel:88005505812"><span class="link-text">8 800 550 58 12</span>
                </a>
            </div>
            <div class="header__cell header__logo">
                <a class="logo" href="/">
                    <div class="logo__img">
                        <img src="/local/js/template/build/assets/images/logo.png" alt="">
                    </div>
                    <div class="logo__span">Спецтехника</div>
                </a>
                <div class="header__text">
                    <svg class="icon icon-logo-text">
                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#logo-text"></use>
                    </svg>
                </div>
            </div>
            <div class="header__cell header__button">
                <button class="button-primary" data-path="gift-request-modal" type="button">Заказать</button>
            </div>
        </div>
    </div>
</header>