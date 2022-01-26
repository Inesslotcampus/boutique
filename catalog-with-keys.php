<?php


$iphone = [
    "name" => "<h2>iPhone</h2>",
    "price" => 45000,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "<img src=https://mobilecity.co.nz/wp-content/uploads/2021/03/K17-scaled-4-1024x1024.jpg >",
    ];

    // foreach ($iphone as $atribute => $character){
    //     echo "<pre>";
    //     print_r($character);
    //     echo "</pre>";

    //    }
    
   


$ipad = [
    "name" => "<h2>ipad</h2>",
    "price" => 83900,
    "weight" => 500,
    "discount" => 10,
    "picture_url" => "<img src=https://m.media-amazon.com/images/I/81+N4PFF7jS._AC_SX466_.jpg>",
    ];
    // echo "<pre>";
    // print_r($ipad);
    // echo "</pre>";

   
    $iMac = [
        "name" => "<h2>iMac</h2>",
        "price" => 224900,
        "weight" => 1200,
        "discount" => 10,
        "picture_url" => "<img src=https://www.apple.com/newsroom/images/product/imac/standard/apple_new-imac-spring21_hero_04202021.jpg.og.jpg?202112030956>",
        ];

        // echo "<pre>";
        // print_r($iMac);
        // echo "</pre>";

        $products=[$iphone, $ipad, $iMac];
foreach ($products as $product){
    echo "<pre>";
    print_r($product);
    echo "</pre>";

}
       
    