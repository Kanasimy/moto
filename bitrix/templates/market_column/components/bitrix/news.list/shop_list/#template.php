<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="row" style="margin-bottom: 15px;">
    <div class="col-md-3">
        <select id="select_city">
            <option>Не выбрано</option>
            <?php
                foreach($arResult['LIST_CITY'] as $city){
                    echo "<option>$city</option>";
                }
            ?>
        </select>
    </div>
	<div class="col-md-9">
 <button id="shop_sk" class="bxr-color-button" type="button">Пункты выдачи</button>&nbsp;<button id="shop_mag" class="bxr-color-button" type="button">Магазины</button> <button id="shop_all" class="bxr-color-button" type="button">Все объекты</button>
	</div>
</div>
<div class="row" style="margin-bottom: 15px;">
	<div class="col-md-12">
		<div id="shop_map" style="width:100%; height:300px">
		</div>
	</div>
</div>

<div class="shop-list">
    <div id="item" class="row" style="margin-bottom: 15px;"
         data-shop="<?=$arItem['IBLOCK_SECTION_ID']?>"
         data-coords="<?=$arItem['PROPERTIES']['SHOP_COORDS_Y']['VALUE']?>,<?=$arItem['PROPERTIES']['SHOP_COORDS_X']['VALUE']?>"
         data-city="<?=$arItem['DISPLAY_PROPERTIES']['SHOP_CITY']['DISPLAY_VALUE']?>"
    >
    <?foreach($arResult["ITEMS"] as $arItem):?>
            <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
<!--                <div class="col-md-12 shop-list-name">-->
<!--                    <a href="#"><b>--><?//=$arItem['NAME']?><!--</b></a> -->
<!--                </div>-->
                <div class="col-md-6 shop-list-prop">
                    <a href="#"><b><?=$arItem['NAME']?></b></a>
                    <!-- class="col-md-3"                   -->
                    <div  id="shop_city">
                            <small><?=$arItem['DISPLAY_PROPERTIES']['SHOP_CITY']['DISPLAY_VALUE']?>, 
                         <?=$arItem['DISPLAY_PROPERTIES']['SHOP_ADDRESS']['DISPLAY_VALUE']?></small>
                    </div>
                    <div id="shop_hours">
                        <small><?=$arItem['DISPLAY_PROPERTIES']['SHOP_HOURS']['DISPLAY_VALUE']?></small>
                    </div>
                    <div id="shop_phone">
                        <small><?=$arItem['DISPLAY_PROPERTIES']['SHOP_PHONE']['DISPLAY_VALUE']?></small>
                    </div>
                </div>
    <?endforeach;?>
    </div>
</div>



