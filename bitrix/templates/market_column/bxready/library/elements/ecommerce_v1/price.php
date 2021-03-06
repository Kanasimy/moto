<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$boolDiscountShow = ('Y' == $arElementParams['SHOW_OLD_PRICE']);
?>

<div class="bxr-product-price-wrap">
    <div class="bxr-market-item-price bxr-format-price">
        <!--old price11-->
        <?if ($boolDiscountShow && $arElement["MIN_PRICE"]['VALUE'] != $arElement["MIN_PRICE"]['DISCOUNT_VALUE']) {?>
            <span class="bxr-market-old-price"><?=$arElement["MIN_PRICE"]['PRINT_VALUE']?></span><br>
        <?}?>
        <!--current price with all discounts-->
        <span class="bxr-market-current-price bxr-market-format-price"><?=$arElement["MIN_PRICE"]["PRINT_DISCOUNT_VALUE"]?></span>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>

<?
if (is_array($arElement["OFFERS"]))
foreach($arElement["OFFERS"] as $offer):?>
    <div class="bxr-offer-price-wrap" id="bxr-offer-price-<?=$offer["ID"]?>" data-item="<?=$offer["ID"]?>" style="display: none;">
        <?$arPrice = $offer["MIN_PRICE"];?>
        <div class="bxr-market-item-price bxr-format-price">
            <!--old price22-->
            <?if ($boolDiscountShow && $arPrice['VALUE'] != $arPrice['DISCOUNT_VALUE']) {?>
                <span class="bxr-market-old-price" id="<? echo $arItemIDs['OLD_PRICE']; ?>"><?=$arPrice['PRINT_VALUE']?></span><br>
            <?}?>
            <!--current price with all discounts-->
            <span class="bxr-market-current-price bxr-market-format-price 111" id="<? echo $arItemIDs['PRICE']; ?>"><?=CurrencyFormat($arPrice['DISCOUNT_VALUE'],$arPrice["CURRENCY"]) ?></span>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
<?endforeach;?>