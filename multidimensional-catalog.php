
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

    }
h2 {
  
  font-family: verdana;
  font-size: 150%;
}
p {
  
  font-family: courier;
  font-size: 100%;
}
</style>
<div class="print_catalog">
<?php
    foreach ($products as $key=>$product){
        ?>
        <h2><?php echo $product["name"]?></h2>
       <br>
        
        <img src="<?php echo $product["picture_url"]?>  " width="500" height="500">
        <p>Prix de base: <?php echo formatPrice($product["price"])?> euros<p>
        <p>Prix sans TVA: <?php echo priceExcludingVAT(formatPrice($product["price"]))?> euros<p>
        <p>Prix avec réduction: <?php echo displayDiscountedPrice($product["discount"],formatPrice($product["price"]))?> euros<p>

  
    <?php }?>
</div>

<div class="formular">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
  



    
</body>
</html>









    


    