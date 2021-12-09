<?
global $APPLICATION;

$dirName = str_replace($_SERVER["DOCUMENT_ROOT"],'', dirname(__FILE__));
$APPLICATION->SetAdditionalCSS("/bitrix/templates/market_column/bxready/library/elements/ecommerce_v1/include/style.css");
$APPLICATION->AddHeadScript("/bitrix/templates/market_column/bxready/library/elements/ecommerce_v1/include/script.js");
?>