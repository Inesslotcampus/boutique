<?php
include "my-function.php";

$products = [
    "iphone" => [
    "name" => "iPhone",
    "price" =>  formatPrice(45000),
    "price without tva" => priceExcludingVAT(formatPrice(45000)),
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "<img src=https://mobilecity.co.nz/wp-content/uploads/2021/03/K17-scaled-4-1024x1024.jpg >",
    ],
    "ipad" => [
    "name" => "iPad",
    "price" => formatPrice(83900),
    "price without tva" => priceExcludingVAT(formatPrice(83900)),
    "weight" => 400,
    "discount" => null,
    "picture_url" => "<img src=https://m.media-amazon.com/images/I/81+N4PFF7jS._AC_SX466_.jpg>",
    ],
    "iMac"=>[
        "name" => "<h2>iMac</h2>",
    "price" => formatPrice(224900),
    "price without tva" => priceExcludingVAT(formatPrice(224900)),

    "weight" => 1200,
    "discount" => 10,
    "picture_url" => "<img src=https://www.apple.com/newsroom/images/product/imac/standard/apple_new-imac-spring21_hero_04202021.jpg.og.jpg?202112030956>",
    ],

    ];

    foreach ($products as $product){
        echo "<pre>";
        print_r($product);
        echo "</pre>";
    
    }
    var_dump($products["iphone"]["price"]);
    var_dump(priceExcludingVAT($products["iphone"]["price"]));


    