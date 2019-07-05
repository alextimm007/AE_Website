<?php
class Database{
    
    // specify your own database credentials
    private $host;
    private $db_name;
    private $username;
    private $password;
    //public $conn;
    
    // get the database connection
    protected function connect(){
        
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->db_name = "ics499";
        
        $conn = new mysqli($this->host, $this->username, $this->password, $this->db_name) or die(mysqli_error());
        return $conn;
    }
}