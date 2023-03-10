<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="footer__nav nav nav--vert">
    <ul class="nav__list">
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
        ?>
            <?if($arItem["SELECTED"]):?>
                <li class="nav__item">
                    <a href="<?=$arItem["LINK"]?>" class="nav__link nav__link--large primary-link selected"><span class="link-text"><?=$arItem["TEXT"]?></span></a></li>
            <?else:?>
                <li class="nav__item">
                    <a href="<?=$arItem["LINK"]?>" class="nav__link nav__link--large primary-link"><span class="link-text"><?=$arItem["TEXT"]?></span></a></li>
            <?endif?>

        <?endforeach?>

    </ul>
</nav>
<?endif?>