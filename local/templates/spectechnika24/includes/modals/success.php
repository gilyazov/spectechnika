<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$title = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_title");
$text = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_text");
$linkText = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_link_text");
$link = \Bitrix\Main\Config\Option::get("grain.customsettings", "modal_success_link");
?>

<div class="modal">
    <div class="modal__container" data-target="callback-modal">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <form class="modal__form form" action="">
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
                    <div class="form__controls">
                        <div class="form__inputs">
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark js-input-mask_text" type="text" placeholder="Ваше имя" name="name" required>
                            </div>
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark js-input-mask_phone" type="text" placeholder="Телефон" name="phone" required>
                            </div>
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark" type="text" placeholder="Комментарий" name="comment" required>
                            </div>
                        </div>
                        <div class="form__submit">
                            <button class="button-primary button-primary--large js-modal-submit" data-path="error-popup" type="submit">Оставить заявку</button>
                            <div class="form__submit-text"><span>Нажимая кнопку “Оставить заявку” вы соглашаетесь с&nbsp;</span>
                                <a href="">политикой конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                    <div class="form__contacts">
                        <div class="nav-popup__phone">
                            <div class="nav-popup__label">Отдел продаж</div>
                            <a class="nav-popup__number primary-link" href="tel:8 800 550 58 12"><span class="link-text"></span>+7 800 550 58 12</a>
                            <a class="nav-popup__mail primary-link" href="mailto:1@teh-spec.ru"><span class="link-text"></span>1@teh-spec.ru</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal">
    <div class="modal__container" data-target="gift-request-modal">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <form class="modal__form form" action="">
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
                    <div class="form__controls">
                        <div class="form__inputs">
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark js-input-mask_text" type="text" placeholder="Ваше имя" name="name" required>
                            </div>
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark js-input-mask_phone" type="text" placeholder="Телефон" name="phone" required>
                            </div>
                        </div>
                        <div class="form__submit">
                            <button class="button-primary button-primary--large js-modal-submit" type="submit">Оставить заявку</button>
                            <div class="form__submit-text"><span>Нажимая кнопку “Оставить заявку” вы соглашаетесь с&nbsp;</span>
                                <a href="">политикой конфиденциальности</a>
                            </div>
                        </div>
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
            </form>
        </div>
    </div>
</div>
<div class="modal">
    <div class="modal__container" data-target="product-request-modal">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <form class="modal__form form" action="">
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
                    <div class="form__controls">
                        <div class="form__inputs">
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark js-input-mask_text" type="text" placeholder="Ваше имя" name="name" required>
                            </div>
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark js-input-mask_phone" type="text" placeholder="Телефон" name="phone" required>
                            </div>
                            <div class="form__input-wrapper">
                                <input class="form__input input input--dark js-input-mask_email" type="text" placeholder="E-mail" name="mail" required>
                            </div>
                            <div class="form__input-wrapper form__input-wrapper--with-label">
                                <label class="form__label">Интересующий товар/услуга</label>
                                <input class="form__input input input--dark" type="text" placeholder="КамАЗ 5490-022-87" name="comment" required>
                            </div>
                        </div>
                        <div class="form__submit">
                            <button class="button-primary button-primary--large js-modal-submit" type="submit">Оставить заявку</button>
                            <div class="form__submit-text"><span>Нажимая кнопку “Оставить заявку” вы соглашаетесь с&nbsp;</span>
                                <a href="">политикой конфиденциальности</a>
                            </div>
                        </div>
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
            </form>
        </div>
    </div>
</div>

<div class="modal js-popup-success">
    <div class="modal__container" data-target="success-popup">
        <div class="modal__content">
            <button class="button-reset modal__close-btn modal-close" type="button">
                <svg class="icon icon-delete">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/images/sprites/sprite-mono.svg#delete"></use>
                </svg>
            </button>
            <div class="modal__response">
                <div class="modal__status-icon">
                    <svg class="icon icon-union">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/images/sprites/sprite-multi.svg#union"></use>
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