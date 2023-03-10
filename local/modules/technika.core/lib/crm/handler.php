<?php
namespace Technika\Core\Crm;

use Bitrix\Main\Diag\Debug;
use Technika\Core\Crm\Bitrix24Entity;
use Bitrix\Main\PhoneNumber\Format;
use Bitrix\Main\PhoneNumber\Parser;

/**
 * Class Bitrix24Entity
 */
class Handler
{
    private $id;
    private string $name;
    private string $phone;
    private string $theme;
    private $crmEntity;
    private $contact;

    public function __construct($id)
    {
        $this->id = $id;
        $this->crmEntity = new Bitrix24Entity();
    }

    public static function run($id)
    {
        $handler = new self($id);

        $handler->init();
        $handler->getContact();
        $handler->addDeal();
    }

    private function init(): void
    {
        $this->initBaseFields();
        $this->initContact();
    }

    private function initBaseFields(): void
    {
        $arSelect = Array("ID", "NAME", "PROPERTY_PHONE", "PROPERTY_THEME");
        $arFilter = Array("ID"=>$this->id);
        $res = \CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        if($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();

            $this->name = $arFields["NAME"];
            $this->phone = $arFields["PROPERTY_PHONE_VALUE"];
            $this->theme = $arFields["PROPERTY_THEME_VALUE"];
        }
    }

    private function initContact()
    {
        $parsed = Parser::getInstance()->parse($this->phone);
        $arContact = $this->crmEntity->contactgetList(
            [],
            [
                "PHONE" => $parsed->format(Format::E164),
                "HAS_PHONE" => "Y"
            ],
            ["ID"]
        );
        if ($arContact['result']){
            $this->contact = $arContact['result'][0]['ID'];
        }
    }

    private function getContact()
    {
        if (!$this->contact){
            $result = $this->crmEntity->contactAdd([
                "NAME" => $this->name,
                "PHONE" => [
                    [
                        "VALUE" => $this->phone,
                        "VALUE_TYPE" => "HOME"
                    ]
                ]
            ]);

            $this->contact = $result['result'];
        }
    }

    private function addDeal()
    {
        $this->crmEntity->dealAdd([
            "TITLE" => $this->theme,
            "CONTACT_IDS" => [$this->contact],
            "SOURCE_ID" => "STORE"
        ]);
    }
}