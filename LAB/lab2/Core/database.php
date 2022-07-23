<?php
namespace Core;

use mysqli;

class Database {
    public function __construct() {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            die("Connection Failed: ". $conn->connect_error());
        }
        echo "Connected Successfully";
    }

    public function HelloWorld() {
        echo "Hello World";
    }
}
?>