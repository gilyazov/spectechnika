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
<div class="intro__gallery js-swiper-album">
    <div class="main-gallery swiper-wrapper">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="main-gallery__item swiper-slide">
                <picture>
                    <!--<source type="image/webp" srcset="/local/js/template/build/assets/images/intro/img-1.webp" alt="&quot;СпецТехника&quot; — дилер ведущих производителей">-->
                    <img src="<?=\Technika\Core\Tools::resizeImage($arItem["DETAIL_PICTURE"]["ID"], 1200, 400, true)?>" alt="<?=$arItem["NAME"]?>">
                </picture>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="intro__slider main-slider js-swiper-main">
    <div class="main-slider__wrapper swiper-wrapper">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="main-slider__slide main-slide swiper-slide">
                <div class="site-container">
                    <div class="main-slide__body">
                        <div class="main-slide__salutation">
                            <div class="main-slide__slogan"><?=$arItem["PROPERTIES"]["SLOGAN"]["~VALUE"]["TEXT"]?></div>
                        </div>
                        <?
                        $a = new SimpleXMLElement($arItem["DISPLAY_PROPERTIES"]["CATALOG"]["DISPLAY_VALUE"]);
                        ?>
                        <a class="main-slide__link" href="<?=$a['href']?>">
                            <div class="main-slide__info">
                                <div class="main-slide__title h4-text">
                                    <span class="link-text"><?=$arItem["~NAME"]?></span>
                                </div>
                                <div class="main-slide__features">
                                    <?foreach ($arItem["PROPERTIES"]["FEATURE"]["VALUE"] as $arFeature):?>
                                        <div class="main-slide__feature">
                                            <div class="_feature-name"><?=$arFeature["SUB_VALUES"]["FEATURE_T"]["VALUE"]?></div>
                                            <div class="_feature-value"><?=$arFeature["SUB_VALUES"]["FEATURE_V"]["VALUE"]?></div>
                                        </div>
                                    <?endforeach;?>
                                </div>
                            </div>
                            <div class="main-slide__image">
                                <div class="main-slide__pic">
                                    <picture>
                                        <!--<source type="image/webp" srcset="/local/js/template/build/assets/images/tech-models/image-1.webp" alt="Спецтехника Камаз 4308">-->
                                        <img src="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 600, 300, true)?>" alt="<?=$arItem["NAME"]?>">
                                    </picture>
                                </div>
                                <div class="main-slide__button">
                                    <span class="_circle-wrapper">
                                        <span class="_circle"></span>
                                      <svg class="icon icon-arrow-r">
                                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#arrow-r"></use>
                                      </svg>
                                      <svg class="icon icon-arrow-rmob">
                                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#arrow-rmob"></use>
                                      </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="main-slider__navigation">
        <div class="site-container">
            <div class="button-slider-wrapper">
                <button class="button-slider button-slider--left main-slider__button main-slider__button--prev" type="button">
                    <svg class="icon icon-v-arrow-l">
                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#v-arrow-l"></use>
                    </svg>
                </button>
                <button class="button-slider button-slider--rigth main-slider__button main-slider__button--next" type="button">
                    <svg class="icon icon-v-arrow-r">
                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#v-arrow-r"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="main-slider__slogan">
        <div class="main-slide__slogan">Горячее&nbsp;<br>предложение!</div>
    </div>
</div>