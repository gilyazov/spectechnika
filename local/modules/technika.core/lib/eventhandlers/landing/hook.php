<?php


namespace Technika\Core\EventHandlers\Landing;

class Hook
{
    public static function onHookExecHandler(\Bitrix\Main\Event $event)
    {
        $result = new \Bitrix\Main\Entity\EventResult;

        $result->modifyFields([
            'ThemeFonts' => function(/** @var \Bitrix\Landing\Hook\Page $hook */ $hook)
            {
                \Bitrix\Landing\Manager::setPageView(
                    'ThemeFonts',
                    ''
                );

                return true;
            }
        ]);

        return $result;
    }
}