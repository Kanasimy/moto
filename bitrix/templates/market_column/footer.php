<? IncludeTemplateLangFile(__FILE__);?>







        </div>
    </div>
</div>


	<?if ($APPLICATION->GetCurPage(true) == SITE_DIR.'index.php'):?>

		<?if ($mainPageType == "one_col"):?>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"named_area",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => SITE_DIR."include/main_page_footer.php",
							"INCLUDE_PTITLE" => GetMessage("GHANGE_MAIN_PAGE_FOOTER")
						),
						false
					);?>
					</div>
				</div>
			</div>
		<?endif;?>

		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.brandblock", 
	"element_detail", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "10",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"PROP_CODE" => array(
			0 => "MANUFACTURER",
			1 => "Manufacturer",
			2 => "",
		),
		"WIDTH" => "0",
		"HEIGHT" => "0",
		"WIDTH_SMALL" => "0",
		"HEIGHT_SMALL" => "0",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"COMPONENT_TEMPLATE" => "element_detail",
		"SHOW_DEACTIVATED" => "N",
		"SINGLE_COMPONENT" => "Y",
		"ELEMENT_COUNT" => "30"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
	<?endif;?>


	<?$BXReady->showBannerPlace("BOTTOM");?>

    <footer>
        <div class="footer-line"></div>
        <div class="container footer-head hidden-sm hidden-xs">
            <div class="row">

                    <div class="col-lg-8 col-md-8 hidden-sm hidden-xs">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "named_area",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."include/footer_catalog_name.php",
                                "INCLUDE_PTITLE" => GetMessage("GHANGE_FOOTER_CATALOG")
                            ),
                            false
                        );?>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "named_area",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."include/footer_menu_name.php",
                                "INCLUDE_PTITLE" => GetMessage("GHANGE_FOOTER_MENU")
                            ),
                            false
                        );?>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs footer-socnet-col">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "named_area",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."include/footer_socnet.php",
                                "INCLUDE_PTITLE" => GetMessage("GHANGE_FOOTER_SOCNET")
                            ),
                            false
                        );?>
                    </div>

            </div>
        </div>
        <div class="container">



            <div class="row footerline">

                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12 mobile-footer-menu-tumbl">
                        <i class="fa fa-chevron-down"></i>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "named_area",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."include/footer_catalog_name.php",
                                "INCLUDE_PTITLE" => GetMessage("GHANGE_FOOTER_CATALOG")
                            ),
                            false
                        );?>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 toggled-item">
                        <?
                        $APPLICATION->IncludeComponent(
                            "alexkova.market:menu",
                            "footer_cols",
                            Array(
                                "ROOT_MENU_TYPE" => "bottom_catalog",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",   
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => "",
                                "COLS" => "4",
                            ),
                            false,
                            array('HIDE_ICONS'=>"Y")
                        );
                        ?>
                    </div>
                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12 mobile-footer-menu-tumbl">
                        <i class="fa fa-chevron-down"></i>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "named_area",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."include/footer_menu_name.php",
                                "INCLUDE_PTITLE" => GetMessage("GHANGE_FOOTER_MENU")
                            ),
                            false
                        );?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 toggled-item">
                        <?
                        $APPLICATION->IncludeComponent(
                            "alexkova.market:menu",
                            "footer_cols",
                            Array(
                                "ROOT_MENU_TYPE" => "footer",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",   
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => "",
                                "COLS" => "1",
                            ),
                            false
                        );
                        ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 footer-about-company">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "named_area",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."include/footer_about_company.php",
                                "INCLUDE_PTITLE" => GetMessage("GHANGE_FOOTER_INFO")
                            ),
                            false
                        );?>
                    </div>
                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "named_area",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."include/footer_socnet.php",
                                "INCLUDE_PTITLE" => GetMessage("GHANGE_FOOTER_SOCNET")
                            ),
                            false
                        );?>
                    </div>

            </div>
        </div>
    </footer>

        <?$APPLICATION->IncludeComponent(
	"alexkova.market:form.iblock", 
	".default", 
	array(
		"IBLOCK_TYPE" => "forms",
		"IBLOCK_ID" => "8",
		"STATUS_NEW" => "NEW",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_ADD" => GetMessage("FORM_ANSWER_RESULT"),
		"RESIZE_IMAGES" => "N",
		"MODE" => "link",
		"PROPERTY_CODES" => array(
			0 => "34",
			1 => "35",
			2 => "36",
		),
		"NAME_FROM_PROPERTY" => "35",
		"GROUPS" => array(
			0 => "2",
		),
		"MAX_FILE_SIZE" => "0",
		"EVENT_CLASS" => "open-answer-form",
		"BUTTON_TEXT" => "",
		"POPUP_TITLE" => GetMessage("RECALL_MESSAGE"),
		"SEND_EVENT" => "KZNC_NEW_FORM_PHONE_RESULT",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
        <?$APPLICATION->IncludeComponent(
	"alexkova.market:form.iblock", 
	"request_trade", 
	array(
		"IBLOCK_TYPE" => "forms",
		"IBLOCK_ID" => "9",
		"STATUS_NEW" => "NEW",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_ADD" => GetMessage("FORM_ANSWER_RESULT"),
		"RESIZE_IMAGES" => "N",
		"MODE" => "link",
		"PROPERTY_CODES" => array(
			0 => "38",
			1 => "39",
			2 => "40",
			3 => "41",
			4 => "42",
			5 => "43",
			6 => "44",
			7 => "45",
		),
		"NAME_FROM_PROPERTY" => "44",
		"GROUPS" => array(
			0 => "2",
		),
		"MAX_FILE_SIZE" => "0",
		"EVENT_CLASS" => "bxr-trade-request",
		"BUTTON_TEXT" => "",
		"POPUP_TITLE" => GetMessage("REQUEST_TRADE"),
		"SEND_EVENT" => "KZNC_NEW_FORM_REQUEST_RESULT",
		"COMPONENT_TEMPLATE" => "request_trade"
	),
	false
);?>
        <?$APPLICATION->IncludeComponent(
	"alexkova.market:form.iblock", 
	"request_trade", 
	array(
		"IBLOCK_TYPE" => "forms",
		"IBLOCK_ID" => "7",
		"STATUS_NEW" => "NEW",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_ADD" => GetMessage("FORM_ANSWER_RESULT"),
		"RESIZE_IMAGES" => "N",
		"MODE" => "link",
		"PROPERTY_CODES" => array(
			0 => "26",
			1 => "27",
			2 => "28",
			3 => "29",
			4 => "30",
			5 => "31",
			6 => "32",
			7 => "33",
		),
		"NAME_FROM_PROPERTY" => "26",
		"GROUPS" => array(
			0 => "2",
		),
		"MAX_FILE_SIZE" => "0",
		"EVENT_CLASS" => "bxr-one-click-buy",
		"BUTTON_TEXT" => "",
		"POPUP_TITLE" => GetMessage("ONE_CLICK_FORM_TITLE"),
		"SEND_EVENT" => "KZNC_NEW_FORM_CLICK_RESULT",
		"COMPONENT_TEMPLATE" => "request_trade"
	),
	false
);?>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37246295 = new Ya.Metrika({ id:37246295, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37246295" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36026435 = new Ya.Metrika({
                    id:36026435,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36026435" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --> 
<!--
<div id="sl-partner-block" style="padding-left: 16px;padding-top: -113px;margin-top: -155px;float: left;width:88px;height:32px;">
	<div id="sl-partner-banner"></div>
</div>

<script type="text/javascript" src="http://yandex.st/swfobject/2.2/swfobject.min.js"></script>
<script type="text/javascript">
	swfobject.embedSWF('http://partner.siriuslogic.ru/server.php?id="99"&echo=2', 'sl-partner-banner', '88', '32', '9.0.0');
</script>
 --> 
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'CNSm5HgYF2';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script>
$(document).ready(function() {
$('img.img-responsive').each(function() {
if ($(this).attr('alt') == 'newyear1') {
$(this).parent().attr('class',$(this).attr('alt'));
$('<a target="_blank" href="https://vk.com/moto36_ru?w=wall-115516614_555" class="bxr-slider-button bxr-color-flat bxr-bg-hover-dark-flat flated1"></a>').insertAfter( $(this) );
$('<span class="bxr-slider-button bxr-color-flat bxr-bg-hover-dark-flat flated2">Участвовать!</span>').insertAfter( $(this) );
$(this).parent().next().css('display','none');
}
});
});
</script>
<style>
span.bxr-slider-button.bxr-color-flat.bxr-bg-hover-dark-flat.flated2 {
    z-index: 1;
    position: relative;
    position: absolute;
    width: 100%;
    bottom: 50px;
    max-width: 200px;
    right: 50px;
}

a.bxr-slider-button.bxr-color-flat.bxr-bg-hover-dark-flat.flated1 {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    opacity: 0;
    z-index: 2;
}
</style>
<script type='text/javascript'> 
$(document).ready(function() { 
$('.bxr-market-current-price').each(function(i,elem) { 
if ($(this).text().substr(0,1)*1 == 0) { 
$(this).text('Цену уточняйте'); 
} 
}); 
}); 

</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/personal/custom/debug.php'); ?>




<!--<script>
$(document).ready(function() { 
   var siteUrl = window.location.hostname;
var regex = /^([a-z0-9]{1,})./gi; // добавь еще "m" если хотите, чтобы работало для мультистрок
var res = regex.exec(siteUrl);

if(res[1]=='lipetsk')
  //alert('это липецк детка');
document.body.innerHTML= document.body.innerHTML.replace(/воронеже/g, 'Липецке');
document.body.innerHTML= document.body.innerHTML.replace(/Воронеж/g, 'Липецк');

if(res[1]=='moto36')
  //alert('а это воронеж');
 });
</script>-->


<?php 
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];

$parsedUrl = parse_url($url);
$host = explode('.', $parsedUrl['host']);
$subdomain = $host[0];
//echo $subdomain;  ?>


<?php if ( $subdomain == 'lipetsk' ){ 


//$APPLICATION->SetPageProperty("DESCRIPTION", "Какой-либо текст ".$APPLICATION->GetMeta("description")."Тоже еще какой-либо текст"); 
//$APPLICATION->SetPageProperty("DESCRIPTION", "".$APPLICATION->GetTitle(title)." в Липецке");


 } else {

//$APPLICATION->SetPageProperty("DESCRIPTION", "".$APPLICATION->GetTitle(title)." в Воронеже");
} ?>





 </body>
</html>