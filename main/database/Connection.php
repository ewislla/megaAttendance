<?php


class Connection
{

    public mysqli $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'world');

        if ($this->con->connect_error) {
            die("Connection failed " . $this->con->connect_error);
        } else {
            echo "Connection successful";
        }
    }
}



$boy = new Connection();