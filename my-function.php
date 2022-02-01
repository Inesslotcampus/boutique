<?php

// $pricec = ["iphoneprix"=>45000,"ipadprix"=>83900,"imac"=>22490];

function formatPrice($pricec){
    $priceuro=$pricec/100;
    
    return $priceuro;
    

}

// foreach ($pricec as $price){
//     echo "<pre>";
//     print_r(formatPrice($pricec["iphoneprix"]));
//     echo "<pre>";
// }
function priceExcludingVAT($priceTTC){
    
    $TVA=20;
    $priceHT=(100*$priceTTC)/(100+$TVA);
    
    
    return number_format($priceHT, 2);
    

}


function displayDiscountedPrice($discount,$price){
    
    $pricediscount=$price-$price*($discount/100);
    return $pricediscount; 
    
}


