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
$this->setFrameMode(true);
?>
<a class="site-controls__link site-controls__link--search primary-link" data-path="search-popup" href="#">
    <svg class="icon icon-search">
        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#search"></use>
    </svg><span class="link-text">Поиск</span>
</a>
<div class="modal modal--search">
    <div class="site-container">
        <div class="modal__container modal__container--search" data-target="search-popup">
            <div class="modal__content">
                <button class="button-reset modal__close-btn modal-close visually-hidden" type="button">
                    <svg class="icon icon-delete">
                        <use xlink:href="/local/js/template/build/assets/images/sprites/sprite-mono.svg#delete"></use>
                    </svg>
                </button>
                <form action="<?=$arResult["FORM_ACTION"]?>" class="modal__searchbar searchbar">
                    <?if($arParams["USE_SUGGEST"] === "Y"):?>
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:search.suggest.input",
                                "",
                                array(
                                    "NAME" => "q",
                                    "VALUE" => "",
                                    "INPUT_SIZE" => 15,
                                    "DROPDOWN_SIZE" => 10,
                                ),
                                $component, array("HIDE_ICONS" => "Y")
                            );?>
                    <?else:?>
                        <input class="searchbar__input" type="text" name="q" value="" autocomplete="off" spellcheck="false" autocorrect="off" required id="search-input" />
                    <?endif;?>
                    <input name="s" type="hidden" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
                    <button class="searchbar__button" type="submit">НАйти</button>
                </form>
            </div>
        </div>
    </div>
</div>