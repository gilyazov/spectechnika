<?php
CJSCore::Init(array("jquery3"));

foreach ($arResult["ITEMS"] as $key => &$arItem){
    if ($arItem["INPUT_NAME"] == "arrFilter_ff[SECTION_ID]"){
        $arItem["NAME"] = "Категория";
    }

    if ($arItem["INPUT_NAME"] == "arrFilter_ff[TAGS]"){
        $arItem["HIDDEN"] = "Y";
    }
    elseif($arItem["TYPE"] == "SELECT"){
        foreach ($arItem['LIST'] as $id => $name){
            /*$name = ($id ? $name : 'Выберите страну');*/
            $options .= '
                <div class="select__value">
                    <input class="select__input" type="radio" id="'.$key.'_'.$id.'" 
                        value="'.$id.'" 
                        '.($arItem['INPUT_VALUE'] == $id ? ' checked="checked"' : '').'
                        name="'.$arItem['INPUT_NAME'].'">
                    <p class="select__input-text">'.$name.'</p>
                </div>
            ';
            $li .= '
                <li>
                    <label class="select__option" for="'.$key.'_'.$id.'" aria-hidden="aria-hidden">'.$name.'</label>
                </li>
            ';
        }

        $arItem["INPUT"] = '
            <div class="select">
                <div class="select__current" tabindex="1">
                    '.$options.'
                    <div class="select__icon">
                        <svg class="icon icon-arrow-d">
                            <use xlink:href="'.BUILD_PATH.'assets/images/sprites/sprite-multi.svg#arrow-d"></use>
                        </svg>
                    </div>
                </div>
                <div class="select__list-wrapper">
                    <ul class="select__list">
                        '.$li.'
                    </ul>
                </div>
            </div>
        ';

        unset($options, $li);
    }
    elseif($arItem["TYPE"] == "RADIO"){
        unset($arResult["ITEMS"][$key]);
        $arResult["CHECKBOXES"][$key] = $arItem;
    }
}