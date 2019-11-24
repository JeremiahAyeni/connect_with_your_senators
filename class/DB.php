<?php

class DB
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "senate";
    private $conn; 

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname) ;
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getValues()
    {
        $query = "SELECT id, name, state, phone, email FROM senate_list";
        $result = $this->conn->query($query);
        $this->conn->close();
        
        return $result;
    }
}
