<?php


?>


<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>


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
        <form role="form" action="homePage.php" method="post" id="homePage">
            <label>Search</label>
            <input type="text" name="search" style="width:500px;height:30px" placeholder="Enter the name of cellphone " required>
             <input type="submit" class="btn btn-success" value="Search" name="search">
             
        </form>  
                      
    </div>
    <div style="padding-left:200px;">
    <form role="form" action="productListingPage.php" method="post" id="homePage">
        <input type="submit" style="width:200px;" class="btn btn-success" value="View All Products" name="viewAll">    
    </form>
   </div>
</div>

<?php include('include/footer.php') ;?>

</body>
</html>
