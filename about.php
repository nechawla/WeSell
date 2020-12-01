<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  <style>
  h3 {
      padding-left: 10px;
  }
  
  #para1 {
    padding-left: 10px;
  }

  #image {
    width: 25%;
    position: relative;
    left: 1050px;
  }
  
  #contact {
    
    padding-left: 35%;
  }
  
  </style>
</head>
<body>
<?php include('include/header.php'); ?>

    <h3>About Us</h3>
    <div id="para1">
        <p> Welcome to WeSell, where we meet all your technological needs! </br> Specializing in cell phones, we sell 
            high quality electronics at affordable prices. </br> Our website is designed to be easy to navigate so you can 
            find what you're looking for quickly and effortlessy.
        </p>
    </div>
    <div id="image">
        <img src="images/cellPhone.jpg">
    </div>
    <div id="contact">
        <p>Have any questions? Contact us through the <a href="contact.php"> Contact </a> page!</p>
    </div>




<?php include('include/footer.php'); ?>  
</body>
</html>