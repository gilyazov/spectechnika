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

<ul class="benefits__list">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <li class="benefits__list-item">
            <?php if ($icon = $arItem["PROPERTIES"]["ICON"]["VALUE"]): ?>
                <img class="lazy benefits__list-item-img" data-src="<?=CFile::GetPath($icon)?>" src="#" alt="<?= $arItem["NAME"] ?>">
            <?php endif; ?>
            <p class="benefits__list-text">
                <?= $arItem["~NAME"] ?>
            </p>
        </li>
    <?php endforeach; ?>
</ul>
