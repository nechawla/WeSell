<?php
if(session_id() == '') {
    session_start();
  }

$servername = "localhost";
$username = "root";
$password = "";
$database="weselldb";
$conn = new mysqli($servername, $username, $password,$database);
// Create connection
if(!empty($_SESSION['admin'])){

  $sql = "select * from customer where Role='user'";
  $result = $conn->query($sql);
  $total_products = mysqli_num_rows($result);
}




?>

<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer List Page</title>


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
<div class="txt-heading">Orders: </div>
	<br/>
    <br/>
<p><?=$total_products?> customers are registered.</p>
<br/>
<br/>
  <table class="tbl-cart" cellpadding="10" cellspacing="2">
  <tbody>
  <tr>
  <th style="text-align:left;" width="3%">First Name</th>
  <th style="text-align:left;" width="10%">Last Name</th>
  <th style="text-align:left;" width="10%">Email</th>
  <th style="text-align:left;" width="5%">Phone</th>

  </tr>	


          <?php foreach ($result as $item): ?>
				<tr>
				<td><?php echo $item["first_name"]; ?></td>
				<td style="text-align:left;"><?php echo $item["second_name"]; ?></td>
                <td style="text-align:left;"><?php echo $item["email"]; ?></td>
                <td style="text-align:left;"><?php echo $item["phone"]; ?></td>

 </tr>
         <?php endforeach; ?>


</tbody>
</table>	
<br/>
<br/>

</div>
  
  </div>


 
  <?php include('include/footer.php') ;?>

</body>
</html>
