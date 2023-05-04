<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="form">
    <div class="site-container">
        <div class="form__loading"></div>
        <div class="form__body">
            <div class="form__heading">
                <h3 class="form__title h3-text">Оставьте&nbsp;заявку и получите&nbsp;подарок!</h3>
                <div class="form__text">Если отправите заявку в течении 5 мин, при покупке получите подарок.</div>
            </div>

            <?php $APPLICATION->IncludeComponent(
                "spectechnika:iblock.element.add.form",
                "form",
                Array(
                    "PREFIX" => "form",
                    "THEME" => "Оставьте заявку и получите подарок",
                    "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
                    "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
                    "CUSTOM_TITLE_DETAIL_PICTURE" => "",
                    "CUSTOM_TITLE_DETAIL_TEXT" => "",
                    "CUSTOM_TITLE_IBLOCK_SECTION" => "",
                    "CUSTOM_TITLE_NAME" => "Ваше имя",
                    "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
                    "CUSTOM_TITLE_PREVIEW_TEXT" => "",
                    "CUSTOM_TITLE_TAGS" => "",
                    "DEFAULT_INPUT_SIZE" => "30",
                    "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
                    "ELEMENT_ASSOC" => "CREATED_BY",
                    "GROUPS" => array("2"),
                    "IBLOCK_ID" => "4",
                    "IBLOCK_TYPE" => "forms",
                    "LEVEL_LAST" => "N",
                    "LIST_URL" => "",
                    "MAX_FILE_SIZE" => "0",
                    "MAX_LEVELS" => "100000",
                    "MAX_USER_ENTRIES" => "100000",
                    "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
                    "PROPERTY_CODES" => array("NAME", 2),
                    "PROPERTY_CODES_REQUIRED" => array("NAME", 2),
                    "RESIZE_IMAGES" => "N",
                    "SEF_MODE" => "N",
                    "STATUS" => "ANY",
                    "STATUS_NEW" => "N",
                    "USER_MESSAGE_ADD" => "Спасибо, ваша заявка отправлена",
                    "USER_MESSAGE_EDIT" => "",
                    "USE_CAPTCHA" => "N"
                )
            );?>

        </div>
    </div>
</section>
