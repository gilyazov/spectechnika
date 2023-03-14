<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="section comparison">
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.compare.list",
        "comparison-fixed",
        Array(
            "ACTION_VARIABLE" => "action",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "COMPARE_URL" => "/compare/",
            "COMPONENT_TEMPLATE" => ".default",
            "DETAIL_URL" => "",
            "IBLOCK_ID" => "1", // iblock_id
            "IBLOCK_TYPE" => "catalog", //iblock_type
            "NAME" => "COMPARE_LIST",
            "POSITION" => "top left",
            "POSITION_FIXED" => "Y",
            "PRODUCT_ID_VARIABLE" => "id"
        )
    );?>
    <div class="site-container">
        #breadcrumb#
        <div class="comparison__title h1-text h1-text--small">Сравнение моделей</div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.compare.list",
            "",
            Array(
                "ACTION_VARIABLE" => "action",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "COMPARE_URL" => "/compare/",
                "COMPONENT_TEMPLATE" => ".default",
                "DETAIL_URL" => "",
                "IBLOCK_ID" => "1", // iblock_id
                "IBLOCK_TYPE" => "catalog", //iblock_type
                "NAME" => "COMPARE_LIST",
                "POSITION" => "top left",
                "POSITION_FIXED" => "Y",
                "PRODUCT_ID_VARIABLE" => "id"
            )
        );?>
    </div>
</section>