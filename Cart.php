<?php
session_start();


class Cart{

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


public function addToCart($post,$get)
{
    
 $query = "SELECT * FROM product WHERE productId='" . $_GET["code"] . "'";
 $result = $this->con->query($query);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$name = $row['productName'];
$code = $row['productId'];
$price = $row['unitPrice'];
$image = $row['imageName'];
    }
}
$cartArray=array();
$cartArray = array(
    $code=>array(
    'name'=>$name,
    'code'=>$code,
    'price'=>$price,
    'quantity'=>1,
    'image'=>$image)
   );
   if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
     $status = "<div class='box' style='color:red;'>
      Product is already added to your cart!</div>"; 
      $_SESSION["message"]=" Product is already added to your cart!";
    } else {
    $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
    $status = "<div class='box'>Product is added to your cart!</div>";
    $_SESSION["message"]="Product is added to your cart!";
 }
 
 }
}


public function emptyCart()
{
    
    unset($_SESSION['shopping_cart']);
}


}
?>