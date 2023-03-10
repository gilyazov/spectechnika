<?php


namespace Technika\Core\EventHandlers\Landing;

class Main
{
    public static function OnBeforePrologAddHandler()
    {
        global $USER, $APPLICATION;
        $engine = new \CComponentEngine();
        $page = $engine->guessComponentPath(
            '/catalog/',
            [
                'detail' => '#section#/#element#/'
            ],
            $variables
        );

        if ($USER->IsAdmin() && $_SERVER["SCRIPT_NAME"] == '/bitrix/admin/landing_view.php') {
            $class = ' is-admin';
            $APPLICATION->SetPageProperty("BodyClass", $class);
        }

        if ($APPLICATION->GetCurPage() == '/catalog/') {
            $APPLICATION->SetPageProperty("BodyClass", "page-main main");
        }

        if ($APPLICATION->GetCurPage() == '/about/') {
            $APPLICATION->SetPageProperty("BodyClass", "page-about-company");
        }

        if ($page == "detail"){
            $APPLICATION->SetPageProperty("BodyClass", "page-product-card");
        }
    }
}