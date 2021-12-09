<?php


$IBlock_ID = 19;


if(CModule::IncludeModule('iblock')) {
    
    $arSort= Array("name"=>"ASC");
    $arSelect = Array("ID","NAME","PROPERTY_SHOP_CITY");

    $arFilter = Array("IBLOCK_ID"=>$IBlock_ID);

    $res =  CIBlockElement::GetList ($arSort, $arFilter, false, false, $arSelect);

    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $uniqCity[] = $arFields['PROPERTY_SHOP_CITY_VALUE'];
 
    }
    
    $uniqCity = array_unique($uniqCity);

    $arResult['LIST_CITY'] = $uniqCity;
}