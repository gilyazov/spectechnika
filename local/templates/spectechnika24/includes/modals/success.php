<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$title = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_title");
$text = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_text");
$linkText = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_link_text");
$link = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_link");
?>

<div class="modal modal--big-index">
    <div class="modal__container" data-target="callback-modal">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <div class="modal__form form">
                <div class="form__body">
                    <div class="form__heading">
                        <div class="form__titles">
                            <h3 class="form__title h4-text">Заказать&nbsp;<br>обратный звонок</h3>
                            <div class="form__text">Наш менеджер свяжется с Вами в&nbsp;ближайшее время!</div>
                        </div>
                        <div class="form__contacts">
                            <div class="form__image">
                                <svg class="icon icon-phone_incoming">
                                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#phone_incoming"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <?php $APPLICATION->IncludeComponent(
                        "spectechnika:iblock.element.add.form",
                        "form",
                        Array(
                            "PREFIX" => "callback-modal",
                            "IS_DARK" => "Y",
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
                            "PROPERTY_CODES" => array("NAME", 2, 44),
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
                    <div class="form__contacts">
                        <div class="nav-popup__phone">
                            <div class="nav-popup__label">Отдел продаж</div>
                            <a class="nav-popup__number primary-link" href="tel:8 800 550 58 12"><span class="link-text"></span>+7 800 550 58 12</a>
                            <a class="nav-popup__mail primary-link" href="mailto:1@teh-spec.ru"><span class="link-text"></span>1@teh-spec.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal--big-index">
    <div class="modal__container" data-target="gift-request-modal">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <div class="modal__form form">
                <div class="form__body">
                    <div class="form__heading">
                        <div class="form__titles">
                            <h3 class="form__title h4-text">Оставьте&nbsp;заявку и&nbsp;получите&nbsp;подарок</h3>
                            <div class="form__text">Если отправите заявку в течении 5 мин, при покупке получите подарок.</div>
                        </div>
                        <div class="form__contacts">
                            <div class="nav-popup__phone">
                                <div class="nav-popup__label">Отдел продаж</div>
                                <a class="nav-popup__number primary-link" href="tel:8 800 550 58 12"><span class="link-text">+7 800 550 58 12</span>
                                </a>
                                <a class="nav-popup__mail primary-link" href="mailto:1@teh-spec.ru"><span class="link-text">1@teh-spec.ru</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $APPLICATION->IncludeComponent(
                        "spectechnika:iblock.element.add.form",
                        "form",
                        Array(
                            "PREFIX" => "gift-request-modal",
                            "IS_DARK" => "Y",
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
                    <div class="form__contacts">
                        <div class="nav-popup__phone">
                            <div class="nav-popup__label">Отдел продаж</div>
                            <a class="nav-popup__number primary-link" href="tel:8 800 550 58 12"><span class="link-text">+7 800 550 58 12</span>
                            </a>
                            <a class="nav-popup__mail primary-link" href="mailto:1@teh-spec.ru"><span class="link-text">1@teh-spec.ru</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal--big-index">
    <div class="modal__container" data-target="product-request-modal">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <div class="modal__form form">
                <div class="form__body">
                    <div class="form__heading">
                        <div class="form__titles">
                            <h3 class="form__title h4-text">Заявка<br>на спецтехнику</h3>
                        </div>
                        <div class="form__contacts">
                            <div class="nav-popup__phone">
                                <div class="nav-popup__label">Отдел продаж</div>
                                <a class="nav-popup__number primary-link" href="tel:8 800 550 58 12"><span class="link-text"></span>+7 800 550 58 12</a>
                                <a class="nav-popup__mail primary-link" href="mailto:1@teh-spec.ru"><span class="link-text"></span>1@teh-spec.ru</a>
                            </div>
                        </div>
                    </div>
                    <?php $APPLICATION->IncludeComponent(
                        "spectechnika:iblock.element.add.form",
                        "form",
                        Array(
                            "PREFIX" => "product-request-modal",
                            "IS_DARK" => "Y",
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
                            "PROPERTY_CODES" => array("NAME", 2, 45),
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
                    <div class="form__contacts">
                        <div class="nav-popup__phone">
                            <div class="nav-popup__label">Отдел продаж</div>
                            <a class="nav-popup__number primary-link" href="tel:8 800 550 58 12"><span class="link-text">+7 800 550 58 12</span>
                            </a>
                            <a class="nav-popup__mail primary-link" href="mailto:1@teh-spec.ru"><span class="link-text">1@teh-spec.ru</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal js-popup-success">
    <div class="modal__container" data-target="success-popup">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?= BUILD_PATH ?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <div class="modal__response">
                <div class="modal__status-icon">
                    <svg class="icon icon-union">
                        <use xlink:href="<?= BUILD_PATH ?>assets/images/sprites/sprite-multi.svg#union"></use>
                    </svg>
                </div>
                <div class="modal__response-body">
                    <h4 class="h4-text"><?=$title?></h4>
                    <p><?=htmlspecialchars_decode($text)?></p>
                </div>
                <a class="modal__link button-primary button-primary--medium" href="<?=$link?>"><?=$linkText?></a>
            </div>
        </div>
    </div>
</div>