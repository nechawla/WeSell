<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="weselldb";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
$sql = "select * from product";
$result = $conn->query($sql);
$total_products = mysqli_num_rows($result);


?>


<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Listing Page</title>


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

  <div class="container" style="padding-top:10px;padding-left:40px;width:800px;height:1000px;">
        <h1>Products</h1>
         <p><?=$total_products?> Products</p>
        <?php foreach ($result as $product): ?>
        <div class='container2'>
            <div class="left">
                <img src="images/<?=$product['imageName']?>" width="100" height="150" alt="<?=$product['productName']?>">
             </div> 
            <div class="right">
                Name : <span class="name"><?=$product['productName']?></span>
                <br/>
                Description : <span class="descrption"><?=$product['productDescription']?></span>
                <br/>
                <span class="price">
                Price: &dollar;<?=$product['unitPrice']?>
                </span>
            </div>
            <br/>
             <div class="choose"  style="padding-left:100px;"> 
                <ul class="nav nav-pills">
                    <li><a href="#"><i class="fa fa-shopping-cart"></i>Add to  cart</a></li>
                </ul>
            </div>
       </div>
        <?php endforeach; ?>
    </div>
               
   

<?php include('include/footer.php') ;?>

</body>
</html>
