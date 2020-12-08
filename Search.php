<?php
if(session_id() == '') {
    session_start();
  }


class Search{

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


public function searchProduct($post,$get)
{
    $search = $this->con->real_escape_string($_POST['searchData']);
  
    $query = "SELECT productId FROM product WHERE productName='$search'";
    $result = $this->con->query($query);

    if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
         $code = (int)$row['productId'];
       }
   }
   echo "<script>window.location='productListingPage.php?productCode=".$code."'</script>";
  
}


}
?>