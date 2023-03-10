<?php


namespace Technika\Core\EventHandlers\Landing;

class Template
{
    public static function onDemosGetRepositoryHandler(\Bitrix\Main\Event $event)
    {
        $result = new \Bitrix\Main\Entity\EventResult;
        $data = $event->getParameter('data');

        foreach ($data as $key => $template){
            if ($key != 'empty')
                unset($data[$key]);
        }

        $result->modifyFields(array(
            'data' => $data
        ));
        return $result;
    }
}