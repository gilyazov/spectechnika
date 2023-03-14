<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
use \Technika\Core\Tools;
?>
<div class="comparison-fixed js-comparison-fixed">
    <div class="site-container">
        <div class="comparison__top js-comparison-fixed-parent">
            <div class="comparison__top-down-row">
                <a class="comparison__top-down" href="#">
                    <svg class="icon icon-download comparison__top-down-icon" width="24" height="24">
                        <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#download"></use>
                    </svg><span class="comparison__top-down-text">Скачать сравнение моделей</span>
                </a>
            </div>
            <div class="comparison-fixed__swiper-wrapper">
                <div class="comparison-fixed__swiper swiper js-comparison-fixed__swiper">
                    <ul class="swiper-wrapper">
                        <?foreach($arResult as $arElement):?>
                            <li class="swiper-slide">
                                <div class="card-small">
                                    <div class="card-small__wrapper">
                                        <picture>
                                            <source type="image/webp"
                                                    data-srcset="<?=Tools::resizeImage($arElement["FIELDS"]["PREVIEW_PICTURE"], 130, 280, true)?>"
                                                    alt="<?= $arElement["NAME"] ?>"
                                                    srcset="<?=Tools::resizeImage($arElement["FIELDS"]["PREVIEW_PICTURE"], 130, 280, true)?>">
                                            <img class="lazy card-small__img"
                                                 data-src="<?=Tools::resizeImage($arElement["FIELDS"]["PREVIEW_PICTURE"], 130, 280, true)?>"
                                                 src="#" alt="<?= $arElement["NAME"] ?>">
                                        </picture>
                                        <div class="card-small__info">
                                            <div class="card-small__info-title"><?=$arElement["NAME"]?></div>
                                            <div class="card-small__info-price"><?=$arElement["FIELDS"]["PROPERTY_PRICE_VALUE"]?> ₽</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
                <div class="comparison__top-swiper-navigation">
                    <button class="comparison__top-swiper-navigation-right next-2">
                        <svg class="icon icon-arrow-r-blue" width="26px" height="15px">
                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#arrow-r-blue"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
