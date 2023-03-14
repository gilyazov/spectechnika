<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$title = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_error_title");
$text = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_error_text");
$linkText = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_error_link_text");
?>

<div class="modal js-popup-error">
    <div class="modal__container" data-target="error-popup">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <div class="modal__response">
                <div class="modal__status-icon">
                    <svg class="icon icon-union-red">
                        <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-multi.svg#union-red"></use>
                    </svg>
                </div>
                <div class="modal__response-body">
                    <h4 class="h4-text"><?=$title?></h4>
                    <p><?=htmlspecialchars_decode($text)?></p>
                </div>
                <button class="modal__link button-primary button-primary--medium modal-close" type="button"><?=$linkText?></button>
            </div>
        </div>
    </div>
</div>