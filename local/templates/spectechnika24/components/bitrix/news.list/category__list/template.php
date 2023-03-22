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
    <ul class="category__list category__list--wrap">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <li class="category__item">
                <div class="category__card card">
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
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="card__title"><?= $arItem["~NAME"] ?></a>
                                <ul class="card__features">
                                    <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value">4х2</span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Тип ошинковки</span><span class="card__feature-value">2</span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Г/п, т (наг./ССУ)</span><span class="card__feature-value">10,82</span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value">4х2</span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Тип ошинковки</span><span class="card__feature-value">2</span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Г/п, т (наг./ССУ)</span><span class="card__feature-value">10,82</span>
                                    </li>
                                    <li class="card__feature"><span class="card__feature-name">Колесная формула</span><span class="card__feature-value">4х2</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__bottom">
                                <div class="card__price"><?if ($arItem["PROPERTIES"]["PRICE"]["VALUE"]):?><span><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</span><?endif;?>
                                    <div class="card__old-price product-info__old-price"><span class="product-info__old-price-value"><?=$arItem["PROPERTIES"]["OLD_PRICE"]["VALUE"]?> ₽</span>
                                        <div class="product-info__discount discount">–20%</div>
                                    </div>
                                </div>
                                <div class="card__controls">
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="button-primary button-primary--medium">Подробнее</a>
                                    <a
                                        class="card__link primary-link ~js-comparison-btn"
                                        data-id="<?=$arItem["ID"]?>"
                                        href="/compare/?action=ADD_TO_COMPARE_LIST&id=<?=$arItem["ID"]?>">
                                        <svg class="icon icon-comparison">
                                            <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#comparison"></use>
                                        </svg><span class="link-text">В сравнение</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif;?>