<?php


namespace Technika\Core\EventHandlers\Search;

class Tags
{
    public static function OnSearchPrepareFilter($sc, $key, $value)
    {
        if ($key == "ITEM_ID"){
            return $sc . "ITEM_ID IN (" . implode(',', $value) . ")";
        }
    }
}