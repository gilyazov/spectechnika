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
                        <a class="button-primary" href="/catalog/">смотреть все</a>
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
                                <button class="ads__button _active button-text" data-value="new">Новинки</button><span class="ads__counter" data-value="new-counter">5</span>
                            </div>
                            <div class="ads__button-wrapper">
                                <button class="ads__button button-text" data-value="discount">Скидки</button><span class="ads__counter" data-value="discount-counter">20</span>
                            </div>
                        </div>
                        <div class="slider-layout__slider-wrapper ads__outer-wrapper">
                            <div class="slider-layout__slider ads__slider swiper js-swiper-ads">
                                <div class="slider-layout__list ads__list swiper-wrapper">
                                    <div class="ads__item swiper-slide">
                                        <div class="card">
                                            <div class="card__body">
                                                <div class="card__image">
                                                    <picture>
                                                        <source type="image/webp" data-srcset="assets/images/cards/img-1.webp" alt="карточка товара производителя &quot;СпецТехника&quot;" srcset="assets/images/placeholder.png">
                                                        <img class="lazy" data-src="assets/images/cards/img-1.jpg" src="#" alt="карточка товара производителя &quot;СпецТехника&quot;">
                                                    </picture>
                                                </div>
                                                <div class="card__info">
                                                    <div class="card__heading">
                                                        <h5 class="card__title">КАМАЗ 54901-004-92</h5>
                                                        <ul class="card__features">
                                                            <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value">4х2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Тип ошинковки</span><span class="card__feature-value">2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Г/п, т (наг./ССУ)</span><span class="card__feature-value">10,82</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__bottom">
                                                        <div class="card__price"><span>от 5 500 000 ₽</span>
                                                        </div>
                                                        <div class="card__controls">
                                                            <button class="button-primary button-primary--medium" data-path="product-request-modal" type="button">Заказать</button>
                                                            <a class="card__link primary-link" href="#">
                                                                <svg class="icon icon-comparison">
                                                                    <use xlink:href="assets/images/sprites/sprite-mono.svg#comparison"></use>
                                                                </svg><span class="link-text">В сравнение</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ads__item swiper-slide">
                                        <div class="card">
                                            <div class="card__body">
                                                <div class="card__image">
                                                    <picture>
                                                        <source type="image/webp" data-srcset="assets/images/cards/img-1.webp" alt="карточка товара производителя &quot;СпецТехника&quot;" srcset="assets/images/placeholder.png">
                                                        <img class="lazy" data-src="assets/images/cards/img-1.jpg" src="#" alt="карточка товара производителя &quot;СпецТехника&quot;">
                                                    </picture>
                                                </div>
                                                <div class="card__info">
                                                    <div class="card__heading">
                                                        <h5 class="card__title">КАМАЗ 54901-004-92</h5>
                                                        <ul class="card__features">
                                                            <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value">4х2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Тип ошинковки</span><span class="card__feature-value">2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Г/п, т (наг./ССУ)</span><span class="card__feature-value">10,82</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__bottom">
                                                        <div class="card__price"><span>от 5 500 000 ₽</span>
                                                        </div>
                                                        <div class="card__controls">
                                                            <button class="button-primary button-primary--medium" data-path="product-request-modal" type="button">Заказать</button>
                                                            <a class="card__link primary-link" href="#">
                                                                <svg class="icon icon-comparison">
                                                                    <use xlink:href="assets/images/sprites/sprite-mono.svg#comparison"></use>
                                                                </svg><span class="link-text">В сравнение</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ads__item swiper-slide">
                                        <div class="card">
                                            <div class="card__body">
                                                <div class="card__image">
                                                    <picture>
                                                        <source type="image/webp" data-srcset="assets/images/cards/img-1.webp" alt="карточка товара производителя &quot;СпецТехника&quot;" srcset="assets/images/placeholder.png">
                                                        <img class="lazy" data-src="assets/images/cards/img-1.jpg" src="#" alt="карточка товара производителя &quot;СпецТехника&quot;">
                                                    </picture>
                                                </div>
                                                <div class="card__info">
                                                    <div class="card__heading">
                                                        <h5 class="card__title">КАМАЗ 54901-004-92</h5>
                                                        <ul class="card__features">
                                                            <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value">4х2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Тип ошинковки</span><span class="card__feature-value">2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Г/п, т (наг./ССУ)</span><span class="card__feature-value">10,82</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__bottom">
                                                        <div class="card__price"><span>от 5 500 000 ₽</span>
                                                        </div>
                                                        <div class="card__controls">
                                                            <button class="button-primary button-primary--medium" data-path="product-request-modal" type="button">Заказать</button>
                                                            <a class="card__link primary-link" href="#">
                                                                <svg class="icon icon-comparison">
                                                                    <use xlink:href="assets/images/sprites/sprite-mono.svg#comparison"></use>
                                                                </svg><span class="link-text">В сравнение</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ads__item swiper-slide">
                                        <div class="card">
                                            <div class="card__body">
                                                <div class="card__image">
                                                    <picture>
                                                        <source type="image/webp" data-srcset="assets/images/cards/img-1.webp" alt="карточка товара производителя &quot;СпецТехника&quot;" srcset="assets/images/placeholder.png">
                                                        <img class="lazy" data-src="assets/images/cards/img-1.jpg" src="#" alt="карточка товара производителя &quot;СпецТехника&quot;">
                                                    </picture>
                                                </div>
                                                <div class="card__info">
                                                    <div class="card__heading">
                                                        <h5 class="card__title">КАМАЗ 54901-004-92</h5>
                                                        <ul class="card__features">
                                                            <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value">4х2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Тип ошинковки</span><span class="card__feature-value">2</span>
                                                            </li>
                                                            <li class="card__feature"><span class="card__feature-name">Г/п, т (наг./ССУ)</span><span class="card__feature-value">10,82</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__bottom">
                                                        <div class="card__price"><span>от 5 500 000 ₽</span>
                                                        </div>
                                                        <div class="card__controls">
                                                            <button class="button-primary button-primary--medium" data-path="product-request-modal" type="button">Заказать</button>
                                                            <a class="card__link primary-link" href="#">
                                                                <svg class="icon icon-comparison">
                                                                    <use xlink:href="assets/images/sprites/sprite-mono.svg#comparison"></use>
                                                                </svg><span class="link-text">В сравнение</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>