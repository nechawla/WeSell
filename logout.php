<!-- reference: w3c school online store theme -->
<?php
if(session_id() == '') {
    session_start();
  }
unset($_SESSION['email']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  
 
</head>
<body>
  <?php include('include/header.php'); ?>

 <div class="container" style="padding-top:20px;padding-left:40px;width:500px;height:600px;">
 
 
 <a href="homePage.php" class="btnRemoveAction">Go Home Page</a>
 <br/>
 <a href="login.php" class="btnRemoveAction">Go Login Page</a>
</div>


</body>

</html>




