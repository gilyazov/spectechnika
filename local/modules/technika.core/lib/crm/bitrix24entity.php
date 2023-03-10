<?php
namespace Technika\Core\Crm;

use Bitrix\Main\Diag\Debug;

/**
 * Class Bitrix24Entity
 */
class Bitrix24Entity
{
    public $client = null;

    public function __construct()
    {
        if (\Bitrix\Main\Loader::includeModule('b24connector')) {
            if (\Bitrix\B24Connector\Connection::isExist()) {
                $this->client = \Bitrix\Socialservices\ApClient::init();
            }
        }
    }

    public function dealAdd($fields = array(), $params = array())
    {
        $fullResult = $this->client->call(
            'crm.deal.add',
            array(
                'fields' => $fields,
                'params' => $params
            )
        );
        return $fullResult;
    }

    public function contactAdd($fields = array(), $params = array())
    {
        $fullResult = $this->client->call(
            'crm.contact.add',
            array(
                'fields' => $fields,
                'params' => $params
            )
        );
        return $fullResult;
    }

    public function contactgetList($order = array(), $filter = array(), $select = array(), $start = 0)
    {
        $fullResult = $this->client->call(
            'crm.contact.list',
            array(
                'order' => $order,
                'filter'=> $filter,
                'select'=> $select,
                'start'	=> $start
            )
        );
        return $fullResult;
    }
}