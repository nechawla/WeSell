<?php
// Create the class Customers
class Customers{
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

    // Insert customer data into the table curstomer
    public function insertData($post)
    {
        $first_name = $this->con->real_escape_string($_POST['inputFirstName']);
        $last_name = $this->con->real_escape_string($_POST['inputLastName']);
        $email = $this->con->real_escape_string($_POST['inputEmail']);
        $phone = $this->con->real_escape_string($_POST['phone']);
        $password = md5($this->con->real_escape_string($_POST['password']));
        $query = "INSERT INTO customer(first_name,second_name, email, phone, password,Role) VALUES ('$first_name','$last_name', '$email', '$phone', '$password','user')";
        $sql = $this->con->query($query);
        if($sql == true){
            echo '<script>window.location="login.php"</script>';
        }
        else{
            echo "Registration failed, please try again!";
        }

    }


}
?>
