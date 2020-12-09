<?php

class Contacts 
{
    private $servername = "localhost";
    private $username = "root";
    private $password ="";
    private $database ="weselldb";
    public $con;

    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if(mysqli_connect_error())
        {
            trigger_error("Not possible to connect to MySQL: " . mysqli_connect_error());
        }
        else
        {
            return $this->con;
        }
    }

    public function insertData($post)
    {
        $name = $this->con->real_escape_string($_POST['nameText']);
        $email = $this->con->real_escape_string($_POST['emailText']);
        $message = $this->con->real_escape_string($_POST['messageText']);
        $orderedDate=date("Y/m/d");
        $query = " INSERT INTO contact(name, email, message, dateSubmitted) VALUES ('$name', '$email', '$message','$orderedDate')";
        $sql = $this->con->query($query);
        
        if($sql == true)
        {
            echo "Inquiry sent!";
        }
        else
        {
            echo "Something went wrong, please try again!";
        }
        
    }
}

?>