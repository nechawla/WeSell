<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Account</title>


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

 <div style="padding-top:20px;padding-left:40px;width:500px;height:600px;">
  <div class="form-group">
       <!--    body  (form)-->            
        <form role="form" action="./index.php" method="post" id="register">
        <div class="form-group">
            <label>First Name</label>
            <input type="email" name="email" id="inputFirstName" class="form-control" placeholder="First Name " required>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="email" name="email" id="inputLastName" class="form-control" placeholder="Last Name " required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address " required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" name="password" id="pwd" class="form-control" placeholder="Password " required>
            <div class="help-block">At least 8 characters with at least one Capital letter, at least one lower case letter and at least one number and at least one Special character:</div>
          </div>
          <div class="form-group">
            <input type="password" name="repassword" id="repwd" class="form-control" placeholder="Re-type Password " required>
          </div>
        
        </form>                  
    </div>
    <!-- Submib button -->
    <div class="form-group">
      <button class="btn btn-success btn-block" name="submit" onclick = "return registerValidation()"  form="register">Register</button>
    </div>
  </form>
  
</div>

<?php include('include/footer.php') ;?>

</body>
</html>
