<?php include "list_product.php";?>
<div class=payproduct>
<h3><?php echo $_POST['nameproduct']; ?> </h3>
<p>Prix unitaire : <?php echo $_POST['priceunit']; ?> euro<p>
<p>Prix réduit : <?php echo $_POST['pricereduc']; ?> euro<p>
<p>Quantité : <?php echo $_POST['quantit']; ?></p>
<p>Prix sans tva : <?php echo $_POST['price-tva']; ?> euro</p>
<h4>TOTAL: <?php echo $_POST['pricereduc']*$_POST['quantit'];?> euro</h4>
</div>

<div class="choicetransport">
<form method="post" action= "cart.php">
<select name="Transport">
<option value="post">La poste</option>
  <option value="saab">Colissimo</option>
  </select>

<input type="submit">
</form>
<?php 
    var_dump($_POST)?>


</div>


<style>
    .payproduct{
        display: flex;
        justify-content: space-around;
        
    }


</style>
