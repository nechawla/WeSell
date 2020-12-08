<?php
require_once("Cart.php");
$cart = new Cart();

if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "remove":
            $cart->remove($_POST,$_GET);
        break;
        case "emptyCart":
            $cart->emptyCart();    
        break;
        case "payOrder":
            $cart->payOrder();
        break;
    }
}



?>

<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart Page</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  
 <style>
.left {float:left;width:45px;}
.right {float:left;margin:20px 0 0 58px;width:500px;}
.container2 {
    width:100%;
    height:auto;
    padding:2%;
}
.containerBox {
width:300px;
height:60px;
padding:1px;
background-color:#303030;
}


 </style>
</head>
<body>
  <?php include('include/header.php'); ?>

  <div id="shopping-cart">
  <div class="container" style="padding-top:10px;padding-left:40px;width:800px;height:1000px;">
<div class="txt-heading">Shopping Cart</div>


<?php		

if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
}


if(!empty($_SESSION['shopping_cart'])) {
  ?>
  
	<form method="post" action="addCartPage.php?action=emptyCart">
            <div class="choose"  style="padding-left:620px"> 
               <ul class="nav-pills">
               <input type="submit" value="Empty Cart Selection"  class="fa fa-shopping-cart" />
               </ul>
           </div>
 </form>
  <table class="tbl-cart" cellpadding="10" cellspacing="1">
  <tbody>
  <tr>
  <th style="text-align:left;">Name</th>
  <th style="text-align:right;" width="5%">Quantity</th>
  <th style="text-align:right;" width="10%">Unit Price</th>
  <th style="text-align:center;" width="5%">Remove</th>
  </tr>	

  <?php
    foreach ($_SESSION["shopping_cart"] as $item){
      
		?>
				<tr>
				<td><?php echo $item["name"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td style="text-align:center;"><a href="addCartPage.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_price += $item["price"];
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right" colspan="1"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>	
<br/>
<br/>
<form method="post" action="addCartPage.php?action=payOrder">
            <div class="choose"  style="padding-left:620px"> 
               <ul class="nav-pills">
               <input type="submit" value="Pay for Order "  class="fa fa-shopping-cart" />
               </ul>
           </div>
 </form>
  <?php
  
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}


?>
</div>
  
  </div>


 
  <?php include('include/footer.php') ;?>

</body>
</html>
