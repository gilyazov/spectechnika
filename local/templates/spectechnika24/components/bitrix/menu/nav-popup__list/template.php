<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="nav-popup__list">
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
        ?>
            <?if($arItem["SELECTED"]):?>
                <li class="nav-popup__item"><a href="<?=$arItem["LINK"]?>" class="nav-popup__link primary-link selected"><span class="link-text"><?=$arItem["TEXT"]?></span></a></li>
            <?else:?>
                <li class="nav-popup__item"><a href="<?=$arItem["LINK"]?>" class="nav-popup__link primary-link"><span class="link-text"><?=$arItem["TEXT"]?></span></a></li>
            <?endif?>

        <?endforeach?>

    </ul>
<?endif?>