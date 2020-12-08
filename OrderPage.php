<?php




?>

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
  <div class="form-group">
       <!--    body  (form)-->            
      Your Order is Confirmed.
     <br/>
     <br/>
     <br/>
       Order Number : <?php echo $_SESSION["orderID"] ?>
       <?php  unset($_SESSION["shopping_cart"]); unset($_SESSION["orderID"]); ?>
       <br/>
       <br/>
       <a href="homePage.php" class="btnRemoveAction">Home Page</a>

   </div>
</div>

<?php include('include/footer.php') ;?>

</body>
</html>