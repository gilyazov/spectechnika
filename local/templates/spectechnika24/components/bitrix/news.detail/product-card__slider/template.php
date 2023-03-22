<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?if($arResult["PROPERTIES"]["SLIDER"]["VALUE"]):?>
    <div class="product-card__slider swiper js-product-card-swiper">
        <div class="product-card__list swiper-wrapper">
            <?php foreach($arResult["PROPERTIES"]["SLIDER"]["VALUE"] as $slide):?>
                <div class="product-card__item swiper-slide">
                    <div class="product-card__picture">
                        <picture>
                            <!--<source type="image/webp" srcset="assets/images/product-card/img-1.webp" alt="Камазы бортовые с КМУ ООО «СПЕЦТЕХНИКА»">-->
                            <img src="<?=\Technika\Core\Tools::resizeImage($slide, 710, 500, true)?>" alt="<?=$arResult["NAME"]?>">
                        </picture>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <div class="product-card__navigation">
            <div class="site-container">
                <div class="button-slider-wrapper button-slider-wrapper--dark">
                    <button class="button-slider button-slider--left product-card__slider-button product-card__slider-button--prev" type="button">
                        <svg class="icon icon-v-arrow-l">
                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#v-arrow-l"></use>
                        </svg>
                    </button>
                    <button class="button-slider button-slider--rigth product-card__slider-button product-card__slider-button--next" type="button">
                        <svg class="icon icon-v-arrow-r">
                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#v-arrow-r"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?endif;?>