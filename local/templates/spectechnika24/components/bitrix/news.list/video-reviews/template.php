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

<div class="js-ajax-container">
    <div class="js-ajax-content">

        <ul class="video-reviews__list js-ajax-list">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <li class="video-reviews__list-item">
                    <div class="slider-layout__item swiper-slide">
                        <div class="link-card">
                            <div class="link-card__body">
                                <div class="link-card__image link-card__image--video">
                                    <?php if ($arItem["PREVIEW_PICTURE"]["SRC"]): ?>
                                        <img class="lazy"
                                             data-src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                             src="/local/js/template/build/assets/images/placeholder.png"
                                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                                    <?php else: ?>
                                        <img src="/local/js/template/build/assets/images/placeholder.png"
                                             alt="Placeholder">
                                    <?php endif; ?>
                                    <?php if (($link = $arItem["PROPERTIES"]["VIDEO_LINK"]["VALUE"]) || ($file = $arItem["PROPERTIES"]["VIDEO_FILE"]["VALUE"])): ?>
                                        <a class="button-play" data-fancybox-plyr
                                           href="<?=$file ? CFile::GetPath($file) : $link?>">
                                            <svg class="icon icon-play">
                                                <use xlink:href="/local/js/template/build/assets//images/sprites/sprite-mono.svg#play"></use>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="link-card__info">
                                    <a class="link-card__title" href="">
                                        <?= $arItem["~NAME"] ?>
                                    </a>
                                    <?php if ($arItem["~PREVIEW_TEXT"]): ?>
                                        <div class="link-card__text">
                                            <?= $arItem["~PREVIEW_TEXT"] ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
    </div>
</div>