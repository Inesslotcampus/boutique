<?php


include "my-function.php";
$products = ["iPhone", "iPad", "iMac"];
// sort($products);
// print_r($products);
//   print_r($products[0]);
//   echo "<br>";
//   print_r(  $products[2]);

$i=count($products);
$n=0;
// while( $n < $i){
//   echo "<br>";
//   echo $products[$n];
//   $n++;


// }

// for ($x=0; $x<$i ;$x++){
//   echo "<br>";
//   echo $products[$x];

// }

// do{
  
//   echo $products[$n];
//   $n++;
// }while ($n < $i);


foreach($products as $product){
  echo "<br>";
  echo $product;
}


