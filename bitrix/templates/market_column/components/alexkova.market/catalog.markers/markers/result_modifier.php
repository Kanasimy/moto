<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();?>
<?
// central manage mode
$module_id = "alexkova.market";
$managment_element_mode = COption::GetOptionString($module_id, "managment_element_mode", "N");
if ($managment_element_mode == "Y") {
    $ownOptElementLib = COption::GetOptionString($module_id, "own_list_element_type_".SITE_TEMPLATE_ID, $arParams["BXREADY_ELEMENT_DRAW"]);
    if (strlen($ownOptElementLib) > 0) {
        $arParams["BXREADY_ELEMENT_DRAW"] = trim($ownOptElementLib); 
    } else {
        $optElementLib = COption::GetOptionString($module_id, "list_element_type_".SITE_TEMPLATE_ID, $arParams["BXREADY_ELEMENT_DRAW"]);
        if (strlen($optElementLib) > 0) {
            $arParams["BXREADY_ELEMENT_DRAW"] = $optElementLib; 
        }
    }
}

// подгружаем все модуль и все его классы
\Bitrix\Main\Loader::includeModule('dev2fun.multidomain');
$arResult = \Dev2fun\MultiDomain\LangData::getDataFields($arResult,'element');
// где arResult - массив полей элемента
// где element - тип, т.к. мы выводим для элемента, поэтому element

?>

