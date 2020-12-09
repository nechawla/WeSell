<!-- reference: w3c school online store theme -->
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
  <div class="form-group">
       <!--    body  (form)-->            
        <form action="login.php" method="post">
        
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address " required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" name="password" id="pwd" class="form-control" placeholder="Password " required>                         
          </div>
          <!-- Submib button -->
          <div class="form-group">
            
          <input type="submit" class="btn btn-success btn-block" name="submit" value="Login">
          </div>
        </form>
        <form role="form" action="register.php" method="post" id="register">
        <input type="submit"  class="btn btn-success btn-block" value="Register User" name="register">    
    </form>
  
</div>

<?php 
  if(isset($_POST["submit"])){
    if(!empty($_POST['email']) && !empty($_POST['password'])) {
      $loginEmail=$_POST['email'];
      $loginPass=md5($_POST['password']);
      echo "Session variables";
      $servername = "localhost";$username = "root";$password = "";$database="weselldb";
      // Create connection
      $con = new mysqli($servername, $username, $password,$database);
      $query="SELECT * FROM customer WHERE email='".$loginEmail."' AND password='".$loginPass."'";   
      $result= mysqli_query($con, $query);
      $num = mysqli_num_rows($result);

      //need to add the encryption for password check, tested with a hardcoded user
    
      if($num == 1){
        $_SESSION['email'] = $loginEmail;
        if($loginEmail=="admin@wesell.com"){
          $_SESSION['admin'] = true;
        }
       echo '<script>window.location="homePage.php"</script>';
      
      }else  
      {
        echo '<script>window.location="login.php"</script>';
      }
    }  
  } 

?>
</body>

</html>
