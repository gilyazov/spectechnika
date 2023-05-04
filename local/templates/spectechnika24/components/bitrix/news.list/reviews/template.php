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
    <section class="section reviews">
        <div class="section__title visually-hidden">section title</div>
        <div class="site-container">
            <div class="slider-layout">
                <div class="slider-layout__title h2-text h2-text--inherit-color">Видео-отзывы</div>
                <div class="slider-layout__body">
                    <div class="slider-layout__sidebar">
                        <div class="link-tip">
                            <div class="link-tip__head">
                                <div class="link-tip__text">Поддержиаем репутацию среди наших клиентов на высоком уровне</div>
                            </div>
                        </div>
                        <div class="slider-layout__controls">
                            <div class="button-slider-wrapper">
                                <button class="button-slider button-slider--left offers__button reviews__button--prev" type="button">
                                    <svg class="icon icon-v-arrow-l">
                                        <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#v-arrow-l"></use>
                                    </svg>
                                </button>
                                <button class="button-slider button-slider--rigth offers__button reviews__button--next" type="button">
                                    <svg class="icon icon-v-arrow-r">
                                        <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#v-arrow-r"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="slider-layout__main">
                        <div class="slider-layout__slider-wrapper reviews__outer-wrapper">
                            <div class="slider-layout__slider reviews__slider swiper js-swiper-reviews">
                                <div class="slider-layout__list swiper-wrapper">
                                    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                                        <div class="slider-layout__item swiper-slide">
                                            <div class="link-card">
                                                <div class="link-card__body">
                                                    <div class="link-card__image link-card__image--video">
                                                        <picture>
                                                            <source type="image/webp"
                                                                    data-srcset="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 530, 325, true)?>"
                                                                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                                                    srcset="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 530, 325, true)?>">
                                                            <img class="lazy"
                                                                 data-src="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 530, 325, true)?>"
                                                                 src="#" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                                        </picture>
                                                        <?php if (($link = $arItem["PROPERTIES"]["VIDEO_LINK"]["VALUE"]) || ($file = $arItem["PROPERTIES"]["VIDEO_FILE"]["VALUE"])): ?>
                                                            <a class="button-play" data-fancybox-plyr
                                                               href="<?=$file ? CFile::GetPath($file) : $link?>">
                                                                <svg class="icon icon-play">
                                                                    <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#play"></use>
                                                                </svg>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="link-card__info">
                                                        <a class="link-card__title" href=""><span class="link-text"><?= $arItem["~NAME"] ?></span>
                                                        </a>
                                                        <div class="link-card__text"><?=$arItem["PREVIEW_TEXT"]?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>