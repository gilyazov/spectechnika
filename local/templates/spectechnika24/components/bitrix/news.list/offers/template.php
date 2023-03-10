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
<div class="slider-layout__main">
    <div class="slider-layout__slider-wrapper offers__outer-wrapper">
        <div class="slider-layout__slider offers__slider swiper js-swiper-offers">
            <div class="slider-layout__list offers__list swiper-wrapper">
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                    <div class="slider-layout__item swiper-slide">
                        <div class="link-card">
                            <div class="link-card__body">
                                <div class="link-card__image">
                                    <picture>
                                        <!--<source type="image/webp" data-srcset="assets/images/cards/img-2.webp" alt="акции производителя &quot;СпецТехника&quot;" srcset="assets/images/placeholder.png">-->
                                        <img class="lazy" data-src="<?=\Technika\Core\Tools::resizeImage($arItem["PREVIEW_PICTURE"]["ID"], 520, 400, true)?>" src="#" alt="<?=$arItem["NAME"]?>">
                                    </picture>
                                </div>
                                <div class="link-card__info">
                                    <a class="link-card__title" href="<?=$arItem["CODE"]?>"><span class="link-text"><?=$arItem["NAME"]?></span>
                                    </a>
                                    <div class="link-card__text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>