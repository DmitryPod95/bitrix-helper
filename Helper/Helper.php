<?php

namespace lib\Helper;

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

Loc::loadMessages(__FILE__);

if (!Loader::includeModule('iblock'))
{
    return;
}


class Helper
{
    public static function getIBlockID($code) {

        $IBlockID = '';
        if(!$code) {
            return "Пустое значение";
        }

        $IBlockID = \CIBlock::GetList([],["CODE" => $code, "ACTIVE" => "Y"])->Fetch()["ID"];

        if(!$IBlockID) {
            return "Нет такого Информационного блока";
        }
        return $IBlockID;
    }
}