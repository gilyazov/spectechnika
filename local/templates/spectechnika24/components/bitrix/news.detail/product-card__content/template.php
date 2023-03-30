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
<div class="product-card__content">
    <div class="site-container">
        <div class="product-card__top">
            <div class="product-card__info product-info">
                <div class="product-info__top">
                    <div class="product-info__heading">
                        <?php if($arResult["PROPERTIES"]["IN_STOCK"]["VALUE"]):?>
                            <div class="product-info__status">
                                <button class="button-status button-status--black">В наличии</button>
                            </div>
                        <?php endif;?>
                        <div class="product-info__title h3-text h3-text--black"><?=$arResult["NAME"]?></div>
                        <div class="product-info__text"><span><?=$arResult["DETAIL_TEXT"]?></span>
                            <a class="product-info__text-btn" href="#"><span class="_open-text"><i>...</i><span>Читать полностью</span>
                                </span><span class="_close-text">Скрыть</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-info__pricing">
                        <?if($arResult["PROPERTIES"]["PRICE"]["VALUE"]):?>
                            <div class="product-info__new-price h4-text"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</div>
                        <?endif;?>
                        <?if($arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]):?>
                            <div class="product-info__old-price"><span class="product-info__old-price-value"><?=$arResult["PROPERTIES"]["OLD_PRICE"]["VALUE"]?> ₽</span>
                                <?if($arResult["PROPERTIES"]["DISCOUNT"]["VALUE"]):?><div class="product-info__discount discount"><?=$arResult["PROPERTIES"]["DISCOUNT"]["VALUE"]?></div><?endif;?>
                            </div>
                        <?endif;?>
                    </div>
                </div>
            </div>
            <div class="product-card__controls">
                <?php if($offer = $arResult["PROPERTIES"]["OFFER"]["VALUE"]):?>
                    <a class="product-card__download product-card__button" href="<?=CFile::GetPath($offer)?>" download>Скачать КП</a>
                <?php endif;?>
                <a class="product-card__compare product-card__button" href="/compare/?action=ADD_TO_COMPARE_LIST&id=<?=$arResult["ID"]?>">
                    <svg class="icon icon-compare">
                        <use xlink:href="<?=BUILD_PATH?>assets/images/sprites/sprite-mono.svg#compare"></use>
                    </svg><span>сравнить</span>
                </a>
                <a class="product-card__order product-card__button button-primary" data-path="product-request-modal" href="#">Заказать</a>
            </div>
        </div>
        <div class="product-card__spec spec">
            <div class="spec__controls">
                <button class="spec__button spec__button--active primary-link spec__button--chassis" data-role="spec-chassis"><span class="link-text"><?=$arResult["PROPERTIES"]["CONTROL_1"]["VALUE"]?></span>
                </button>
                <?php if($arResult["PROPERTIES"]["CMU"]["VALUE"]):?>
                    <button class="spec__button primary-link spec__button--crane" data-role="spec-crane"><span class="link-text"><?=$arResult["PROPERTIES"]["CONTROL_2"]["VALUE"]?></span>
                    </button>
                <?endif;?>
            </div>
            <div class="spec__table spec__table--visible" id="spec-chassis">
                <?php foreach ($arResult["PROPERTIES"]["CHASSIS"]["VALUE"] as $arChassis):?>
                    <div class="spec__table-row">
                        <div class="spec__table-col"><span class="spec__key"><?=$arChassis["SUB_VALUES"]["CHASSIS_T"]["VALUE"]?></span>
                        </div>
                        <div class="spec__table-col"><span class="spec__value"><?=$arChassis["SUB_VALUES"]["CHASSIS_V"]["VALUE"]?></span>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <?php if($arResult["PROPERTIES"]["CMU"]["VALUE"]):?>
                <div class="spec__table" id="spec-crane">
                    <?php foreach ($arResult["PROPERTIES"]["CMU"]["VALUE"] as $arChassis):?>
                        <div class="spec__table-row">
                            <div class="spec__table-col"><span class="spec__key"><?=$arChassis["SUB_VALUES"]["CMU_T"]["VALUE"]?></span>
                            </div>
                            <div class="spec__table-col"><span class="spec__value"><?=$arChassis["SUB_VALUES"]["CMU_V"]["VALUE"]?></span>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            <?endif;?>
        </div>
    </div>
</div>
