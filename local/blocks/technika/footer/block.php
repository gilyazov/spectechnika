<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<footer class="footer">
    <div class="site-container">
        <div class="footer__head">
            <div class="footer__title h3-text">Мы всегда рады видеть наших клиентов и делать все, чтобы их жизнь стала лучше и проще!</div>
            <div class="footer__callback">
                <a class="primary-link primary-link--large" href="tel:88005505812"><span class="link-text">8 800 550 58 12</span><span class="label-text">По общим вопросам</span>
                </a>
                <button class="button-primary" data-path="callback-modal" type="button">обратный звонок</button>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__row">
                <div class="footer__col footer__col--small">
                    <div class="footer__about about">
                        <div class="about__name">ООО «СПЕЦТЕХНИКА»</div>
                        <div class="about__address">Российская Федерация, Республика Татарстан, г. Набережные Челны, Транспортный проезд, 2</div>
                    </div>
                </div>
                <div class="footer__col footer__col--large">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "catalog-links",
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
                </div>
                <div class="footer__col footer__col--small footer__col--second">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "footer__nav",
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
                </div>
            </div>
            <div class="footer__row">
                <div class="footer__col footer__col--small footer__col--second">
                    <div class="footer__policy policy">
                        <div class="policy__text">© 2017–2022 Все&nbsp;права&nbsp;защищены</div>
                        <a class="policy__link primary-link" href="/"><span class="link-text">Правовая информация</span>
                        </a>
                    </div>
                </div>
                <div class="footer__col footer__col--large">
                    <form class="footer__form line-form">
                        <div class="line-form__wrapper">
                            <label class="line-form__label">Подпишитесь и получите<br>подарок за покупку!</label>
                            <div class="line-form__input-wrapper">
                                <input class="line-form__input" type="text" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$">
                                <button class="line-form__button line-form__button--text button-primary button-primary--black" type="submit">Подписаться</button>
                                <button class="line-form__button line-form__button--icon" type="submit">
                                    <svg class="icon icon-form-arrow">
                                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#form-arrow"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="footer__col footer__col--small">
                    <a class="footer__dev dev" href="#"><span class="dev__span">Сайт разработан</span>
                        <svg class="icon icon-dev-logo">
                            <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#dev-logo"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>