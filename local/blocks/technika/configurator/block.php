<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="section configurator">
    <div class="site-container">
        #breadcrumb#
        <h1 class="configurator__title h1-text h1-text--small">Конфигура&shy;тор</h1>
        <div class="cat-layout__container">
            <div class="cat-layout__main">
                <p class="configurator__text" data-number="168">Конфигуратор спецтехники поможет подобрать комплектацию автомобиля и проверить комплектующие на совместимость. Выбирайте, сравнивайте характеристики, заказывайте дополнительные опции для создания конфигурации транспортного средства, подходящего для Вас.</p>

                <? $APPLICATION->IncludeComponent(
                    "spectechnika:configurator",
                    ""
                ); ?>
            </div>
        </div>
    </div>
</section>