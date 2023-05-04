<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$address_label = \Bitrix\Main\Config\Option::get("grain.customsettings", "address_label");
$address = \Bitrix\Main\Config\Option::get("grain.customsettings", "address");
$work_label = \Bitrix\Main\Config\Option::get("grain.customsettings", "work_label");
$work = \Bitrix\Main\Config\Option::get("grain.customsettings", "work");
$email_label = \Bitrix\Main\Config\Option::get("grain.customsettings", "email_label");
$email = \Bitrix\Main\Config\Option::get("grain.customsettings", "email");

$sales_label = \Bitrix\Main\Config\Option::get("grain.customsettings", "sales_label");
$sales_phone = \Bitrix\Main\Config\Option::get("grain.customsettings", "sales_phone");
$sales_email = \Bitrix\Main\Config\Option::get("grain.customsettings", "sales_email");
$accounting_label = \Bitrix\Main\Config\Option::get("grain.customsettings", "accounting_label");
$accounting_phone = \Bitrix\Main\Config\Option::get("grain.customsettings", "accounting_phone");
$accounting_email = \Bitrix\Main\Config\Option::get("grain.customsettings", "accounting_email");
?>

<div class="cat-layout__container">
    <div class="cat-layout__main">
        <ul class="contacts__list">
            <li class="contacts__list-item">
                <span class="contacts__list-item-title"><?= $address_label ?></span>
                <div class="contacts__list-item-text"><?= $address ?></div>
            </li>
            <li class="contacts__list-item">
                <span class="contacts__list-item-title"><?= $work_label ?></span>
                <div class="contacts__list-item-text"><?= $work ?></div>
            </li>
            <li class="contacts__list-item">
                <span class="contacts__list-item-title"><?= $email_label ?></span>
                <a class="primary-link contacts__list-item-email"
                   href="mailto:<?= $email ?>"><span class="link-text"><?= $email ?></span></a>
            </li>
        </ul>
        <ul class="contacts__list">
            <li class="contacts__list-item">
                <span class="contacts__list-item-title"><?= $sales_label ?></span>
                <a class="primary-link contacts__list-item-telephone"
                   href="tel:<?= preg_replace("/\D/", "", $sales_phone) ?>">
                    <span class="link-text"><?= $sales_phone ?></span>
                </a>
                <a class="primary-link contacts__list-item-email"
                   href="mailto:<?= $sales_email ?>"><span class="link-text"><?= $sales_email ?></span></a>
            </li>
            <li class="contacts__list-item">
                <span class="contacts__list-item-title"><?= $accounting_label ?></span>
                <a class="primary-link contacts__list-item-telephone"
                   href="tel:<?= preg_replace("/\D/", "", $accounting_phone) ?>">
                    <span class="link-text"><?= $accounting_phone ?></span>
                </a>
                <a class="primary-link contacts__list-item-email" href="mailto:<?= $accounting_email ?>">
                    <span class="link-text"><?= $accounting_email ?></span>
                </a>
            </li>
        </ul>
    </div>
</div>

