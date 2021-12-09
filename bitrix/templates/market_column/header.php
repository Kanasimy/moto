<?IncludeTemplateLangFile(__FILE__);?>
<?
if (!CModule::IncludeModule('alexkova.market')) return;
if (!CModule::IncludeModule('alexkova.bxready')) return;



use Alexkova\Market\Core;
use Alexkova\Bxready\Core as BXRCore;
use Alexkova\Bxready\Bxready;

global $templateType, $catalogType, $mainPageType, $arTopMenu, $arLeftMenu;

$arTopMenu = array (
	"TYPE" => "with_catalog",
	"TEMPLATE" => "version_v1",
	"FIXED_MENU" => "Y",
	"FULL_WIDTH" => "Y",
	"STYLE_MENU" => "colored_color",
	"TEMPLATE_MENU_HOVER" => "classic",
	"STYLE_MENU_HOVER" => "colored_light",
	"PICTURE_SECTION" => "N",
	"PICTURE_CATEGARIES" => "N",
	"HOVER_MENU_COL_LG" => "3",
	"HOVER_MENU_COL_MD" => "3"
);

$arLeftMenu = array (
	"TYPE" => "with_catalog",
	"LEFT_MENU_TEMPLATE" => "left_hover",
	"STYLE_MENU" => "colored_dark",
	"PICTURE_SECTION" => "",
	"SUBMENU" => "ACTIVE_SHOW",
);

$BXReady = \Alexkova\Market\Core::getInstance();
/******************default settings************************/
$BXReady->setAreaType('top_line_type', 'v21');
$BXReady->setAreaType('header_type', 'version_6');
$BXReady->setAreaType('top_menu_type', 'v1');
$BXReady->setAreaType('left_menu_type', 'v2');

$BXReady->setBannerSettings(array(
	"TOP"=>"FIXED",
	"BOTTOM"=>"FIXED",
	"CATALOG_TOP"=>"RESPONSIVE",
	"CATALOG_BOTTOM"=>"RESPONSIVE",
	"LEFT"=>"RESPONSIVE",
));

if ($USER->IsAdmin()) $BXReady->getBitrixTopPanelMenu();

$mainPageType = "two_col";
//$mainPageType = "two_col";
$templateType = "two_col";
//$templateType = "one_col";
$catalogType = "two_col";
?>




<?php 
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

$parsedUrl = parse_url($url);
$host = explode('.', $parsedUrl['host']);
$subdomain = $host[0];
//echo $subdomain;  ?>
<!DOCTYPE html>
<html>
<head>




<?php if ( $subdomain == 'lipetsk' ){ ?>

<title><?$APPLICATION->ShowTitle();?> в Липецке</title>

<?php } elseif ( $subdomain == 'kursk' ){ ?> 

	<title><?$APPLICATION->ShowTitle();?> в Курске</title>
	<meta name="yandex-verification" content="4bd6a275943b3755" />

<?php } elseif ( $subdomain == 'belgorod' ){ ?> 

	<title><?$APPLICATION->ShowTitle();?> в Белгороде</title>
	<meta name="yandex-verification" content="eadd4b75372ffee4" />

<?php } elseif ( $subdomain == 'stary-oskol' ){ ?> 

	<title><?$APPLICATION->ShowTitle();?> в Старом Осколе</title>	
	<meta name="yandex-verification" content="948e8a3ced3b469f" />

<?php } elseif ( $subdomain == 'tambov' ){ ?> 

	<title><?$APPLICATION->ShowTitle();?> в Тамбове</title>
	<meta name="yandex-verification" content="e7dd2cd1a36639ad" />

<?php } else { ?>
	<title><?$APPLICATION->ShowTitle();?> в Воронеже</title>

<?php } ?>


<!--<title><?$APPLICATION->ShowTitle();?></title>-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,700,700italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2">
	<?
$APPLICATION->ShowMeta("keywords");
$APPLICATION->ShowMeta("description");
$APPLICATION->ShowCSS();
$APPLICATION->ShowHeadStrings();
$APPLICATION->ShowHeadScripts();
?>

        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-1.11.3.js');?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/script.js');?>
        <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.selectric.js');?>

        <?
        $APPLICATION->SetAdditionalCSS("/bitrix/css/main/selectric.css");
        $APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");
        $APPLICATION->SetAdditionalCSS("/bitrix/css/main/font-awesome.css");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/library/bootstrap/js/bootstrap.min.js');
        ?>
        
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/library/bootstrap/css/grid10_column.css', true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/library/less/less.css", true);
	?>
	
	<script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU' type="text/javascript"></script>
<script async="async" src="https://w.uptolike.com/widgets/v1/zp.js?pid=1897145" type="text/javascript"></script>
</head>
<body>

    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>

    <?
//    if ($GLOBALS["USER"]->GetId() == 2 || $GLOBALS["USER"]->GetId() == 6) {
        if ($GLOBALS["USER"]->isAdmin() && false) {?>
        <?$APPLICATION->IncludeComponent(
		"bxr.demo:customize.panel",
		".default",
		array(),
		false
	);?>
    <? }?>

	<?

	$BXReady->showBannerPlace("TOP");
	?>

	<?
	// Headline and Small Basket Interface
	if ($BXReady->getArea('top_line_type')){
		include($BXReady->getAreaPath('top_line_type'));
	};
	// end Headline
	?>

	<?
	// Header Basket Interface
	if ($BXReady->getArea('header_type')){
		include($BXReady->getAreaPath('header_type'));
	};
	// end Headline
	?>

	<?$APPLICATION->IncludeComponent(
	"alexkova.market:buttonUp", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"LOCATION_HORIZONTALLY" => "left",
		"BUTTON_UP_HORIZONTALLY_INDENT" => "15",
		"BUTTON_UP_VERTICAL_INDENT" => "15",
		"BUTTON_UP_TOP_SHOW" => "300",
		"BUTTON_UP_SPEED" => "5000"
	),
	false
);?>

    
        <?
	// TopMenu
        if (strlen($arTopMenu["TYPE"])) {
            switch ($arTopMenu["TYPE"]) {
                case "with_catalog": $BXReady->setAreaType('top_menu_type', 'v1'); break;
                case "only_catalog": $BXReady->setAreaType('top_menu_type', 'v2'); break;
            }
        }
	if ($BXReady->getArea('top_menu_type')){
                include($BXReady->getAreaPath('top_menu_type'));
	};
	// end TopMenu
	?>
    
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"",
					Array(
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => "",
						"SITE_ID" => "-",
						"START_FROM" => "0"
					)
				);?>


			</div>
		</div>
	</div>



    <div class="container tb20" id="content">
        <div class="row">


	<?if ($APPLICATION->GetCurPage(true) == SITE_DIR.'index.php'):?>
		<?if ($mainPageType == "two_col"):?>


			<div class="col-lg-3 col-md-3 "> <!-- hidden-sm hidden-xs -->
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"named_area",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_DIR."include/main_page_left_column.php",
						"INCLUDE_PTITLE" => GetMessage("GHANGE_MAIN_PAGE_LEFT")
					),
					false
				);?>
			</div>


			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"named_area",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_DIR."include/main_page_promo_column.php",
						"INCLUDE_PTITLE" => GetMessage("GHANGE_MAIN_PAGE_PROMO")
					),
					false
				);?>
		<?else:?>

			<div class="col-xs-12">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"named_area",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_DIR."include/main_page_promo.php",
						"INCLUDE_PTITLE" => GetMessage("GHANGE_MAIN_PAGE_PROMO")
					),
					false
				);?>
		<?endif;?>


	<?endif;?>



	<?if ($APPLICATION->GetCurPage(true) != SITE_DIR.'index.php'):?>

		<?if ($templateType == "one_col" || substr($APPLICATION->GetCurDir(),0,(8+strlen(SITE_DIR))) == SITE_DIR.'catalog/'):?>

        <div class="col-xs-12">

		<?else:?>
					<div class="col-lg-3 col-md-3 "> <!-- hidden-sm hidden-xs   -->

						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"named_area",
							Array(
								"AREA_FILE_SHOW" => "sect",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => SITE_DIR."include/page_left_column.php",
								"INCLUDE_PTITLE" => GetMessage("GHANGE_PAGE_LEFT")
							),
							false
						);?>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right">
					<h1><?$APPLICATION->ShowTitle(false);?></h1>
		<?endif;?>

	<?endif;?>