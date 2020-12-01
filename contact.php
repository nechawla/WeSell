<?php

    include 'contactDB.php';

    $contactDBObj = new Contacts();

    if(isset($_POST['submit']))
    {
        $contactDBObj->insertData($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  <style>

  h3 {
    padding-left: 10px;
  }

  #divName {
    padding: 10px;
  }

  #divEmail {
    padding: 10px;
  }

  #divMessage {
    padding: 10px;
  }

  input[name="btnSubmit"] {
    position: relative;
    left: 40px;
    transform: scale(1.5);
  }

  input[name="nameText"] {
    position: relative;
    left: 10px;
  }

  input[name="emailText"] {
    position: relative;
    left: 10px;
  }

  textarea {
      width: 172px;
  }

  </style>
  
</head>
<body>
<?php include('include/header.php'); ?>

  <h3>Contact Us</h3>
    
    <form>
    <div id="divName">
        <label>Name: </label>
        <input type="text" name="nameText">
    </div>
    <div id="divEmail">
        <label>Email: </label>
        <input type="text" name="emailText">
    </div>
    <div id="divMessage">
        <label>Inquiry: </label>
        <textarea name="messageText"></textarea>
    </div>

    </br>

    <input type="submit" name="btnSubmit" value="Send">
    
    </br> </br>
    </form>

<?php include('include/footer.php'); ?>  
</body>
</html>