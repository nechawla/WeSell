<?php
if(session_id() == '') {
    session_start();
  }


class Transaction{

    private $servername = "localhost";
    private $username = "root";
    private $password ="";
    private $database ="weselldb";
    public $con;

    // Create connection string (Database connection)
    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if(mysqli_connect_error())
        {
            trigger_error("Not possible to connect to MySQL: ".mysqli_connect_error());
        }
        else
        {
         
            return $this->con;
        }
    }


public function placeOrder($post,$get)
{
    $payment = $this->con->real_escape_string($_POST['payment_type']);
    if(!empty($_SESSION['email'])){
        $Email=$_SESSION['email'];
    }
    else{
        $Email="Guest";
    }

    if($payment=="pay_later")
    {
        $payment_Type = "Pay Later";
    }else{
        $payment_Type = "Card Payment";
    }

   
    foreach($_SESSION["shopping_cart"] as $items) {   
        $name[]= $items["name"]; 
        }
        $products=implode(',',$name);
    $orderedDate=date("Y/m/d");
    $query = "INSERT INTO transaction(orderedItems,orderedBy, orderStatus, paymentType,orderedDate) VALUES ('$products','$Email','success','$payment_Type','$orderedDate')";
    $sql = $this->con->query($query);
    if($sql == true){
        $last_id = $this->con->insert_id;
        $_SESSION["orderID"]=$last_id;
        echo '$last_id';
      //  echo '<script>window.location="OrderPage.php?orderId</script>';
    }
    else{
        echo "Order failed, please try again!";
    }
    echo '<script>window.location="OrderPage.php"</script>';
}


}
?>