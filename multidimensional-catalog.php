
<?php
include "header.html";

include "my-function.php";
include "list_product.php";

?>
<style>
 .print_catalog{
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;

    }
h2 {
  
  font-family: verdana;
  font-size: 150%;
}
p {
  
  font-family: courier;
  font-size: 100%;
}

.baseprice{
    color: red;
    

}
</style>
<div class="print_catalog">
<?php
    foreach ($products as $key=>$product){
        ?>
        <h2><?php echo $product["name"]?></h2>
       <br>
        
        <img src="<?php echo $product["picture_url"]?>  " width="500" height="500">
        
        <?php if ($product["discount"] != null){ ?>
        <p class=baseprice>Prix de base: <?php echo formatPrice($product["price"])?> euros<p>
        <p>Prix avec réduction: <?php echo displayDiscountedPrice($product["discount"],formatPrice($product["price"]))?> euros<p>

        <?php }else{?>
            <p class=baseprice>Prix: <?php echo formatPrice($product["price"])?> euros<p>
            <?php }?>


        <p>Prix sans TVA: <?php echo priceExcludingVAT(formatPrice($product["price"]))?> euros<p>
          
        <div class="formular">
<form method="post" action= "cart.php">
  Quantité: <input type="number" name="quantit" required>
  <input type="hidden"  name="nameproduct" value=<?= $key ?>>
  <input type="hidden"  name="priceunit" value=<?= formatPrice($product["price"]) ?>>
  <input type="hidden"  name="price-tva" value=<?=priceExcludingVAT(formatPrice($product["price"]))?> >
  <input type="hidden"  name="pricereduc" value=<?=displayDiscountedPrice($product["discount"],formatPrice($product["price"]))?> >
  
  <input type="submit">
</form>

  
    <?php }
    var_dump($_POST)?>

</div>


  



    
</body>
</html>









    


    