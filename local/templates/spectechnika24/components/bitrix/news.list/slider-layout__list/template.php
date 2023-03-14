<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if($arResult["ITEMS"]):?>
    <div class="slider-layout__list ads__list swiper-wrapper">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="ads__item swiper-slide">
                <div class="card">
                    <div class="card__body">
                        <?if($arItem["PREVIEW_PICTURE"]["ID"]):?>
                            <div class="card__image">
                                <picture>
                                    <source type="image/webp"
                                            data-srcset="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 385, 280, true)?>"
                                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                            srcset="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 385, 280, true)?>">
                                    <img class="lazy"
                                         data-src="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 385, 280, true)?>"
                                         src="#" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                </picture>
                            </div>
                        <?endif;?>
                        <div class="card__info">
                            <div class="card__heading">
                                <h5 class="card__title"><?= $arItem["~NAME"] ?></h5>
                                <ul class="card__features">
                                    <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value"><?= $arItem["TAGS"] ?></span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Тип ошинковки</span><span class="card__feature-value">2???</span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Г/п, т (наг./ССУ)</span><span class="card__feature-value">10,82???</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__bottom">
                                <div class="card__price"><span><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</span>
                                </div>
                                <div class="card__controls">
                                    <button class="button-primary button-primary--medium" data-path="product-request-modal" type="button">Заказать</button>
                                    <a class="card__link primary-link" href="/compare/?action=ADD_TO_COMPARE_LIST&id=<?=$arItem["ID"]?>">
                                        <svg class="icon icon-comparison">
                                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#comparison"></use>
                                        </svg><span class="link-text">В сравнение</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif;?>