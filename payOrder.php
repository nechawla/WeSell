<?php


if(!empty($_GET["action"])) {

    require_once("Transaction.php");
    $transaction = new Transaction();
    
    switch($_GET["action"]) {
        case "placeOrder":
            $transaction -> placeOrder($_POST,$_GET); 
        break;
    }
}


?>
<script type="text/javascript">
    $(document).ready(function() {
        var element = document.getElementsByClassName("inputEmail");
        setInterval(
            function(){
                element.innerHTML = "{{Session::get('email')}}";
            },500
        );
    });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Confirmation Page</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  
 
</head>
<body>
  <?php include('include/header.php'); ?>

  <div class="container" style="padding-top:50px;padding-left:40px;width:700px;height:600px;">
  <form method="post" action="payOrder.php?action=placeOrder">
       <div class="form-group">
            <label>User Details:</label>
        </div>
            <div class="form-group">
            <label>First Name</label>
            <input type="text" name="inputFirstName"  class="form-control" placeholder="First Name " required>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="inputLastName" class="form-control" placeholder="Last Name " required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="inputEmail"  class="form-control" placeholder="Email Address " required>
          </div>
          
 <br/>
 <br/>
 <div class="form-group">
            <label>Payment Method:</label>
        </div>
        Payment Mode :
  <input type="radio" name="payment_type" <?php if (isset($payment_type) && $payment_type=="card") echo "checked";?> value="card">Card Payment
  <input type="radio" name="payment_type" <?php if (isset($payment_type) && $payment_type=="pay_later") echo "checked";?> value="pay_later">Pay Later
           <br/>
           <br/>   
           <br/> 
         <div class="form-group">
               <input type="submit" value="Confirm Order "  class="fa fa-shopping-cart" />
               
           </div>
 </form>
</div>


<?php

foreach($_SESSION["shopping_cart"] as $items) {
   
   $final[]=$items["code"];    
        }
        $products=implode('|',$final);
        echo $products;
        ?>

<?php include('include/footer.php') ;?>

</body>
</html>