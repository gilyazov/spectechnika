<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header__cell header__nav">
    <nav class="nav">
        <ul class="nav__list">
            <?
            foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
            ?>
                <?if($arItem["SELECTED"]):?>
                    <li class="nav__item"><a href="<?=$arItem["LINK"]?>" class="nav__link primary-link selected"><span class="link-text"><?=$arItem["TEXT"]?></span></a></li>
                <?else:?>
                    <li class="nav__item"><a href="<?=$arItem["LINK"]?>" class="nav__link primary-link"><span class="link-text"><?=$arItem["TEXT"]?></span></a></li>
                <?endif?>

            <?endforeach?>

        </ul>
    </nav>
    <button class="button-nav" data-path="nav-popup">
        <svg class="icon icon-menu-burger">
            <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#menu-burger"></use>
        </svg>
        <svg class="icon icon-closing">
            <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-multi.svg#closing"></use>
        </svg>
    </button>
</div>
<?endif?>