<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="section contacts">
    <div class="site-container">
        <div class="section__breadcrumbs breadcrumbs">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="/">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a class="breadcrumbs__link" href="/">Контакты</a>
                </li>
            </ul>
        </div>
        <h1 class="contacts__title h1-text h1-text--small">Контакты</h1>

        <? $APPLICATION->IncludeComponent(
            "spectechnika:empty",
            "contacts"
        ); ?>

    </div>
</section>