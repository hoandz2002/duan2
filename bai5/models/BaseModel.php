<?php
class BaseModel{
    function getConnect(){
        $dbUrl = "mysql: host=localhost; port=3306; dbname=we16303_php2";
        $dbUser = "root";
        $dbPass ="";
        $connect = new PDO($dbUrl, $dbUser, $dbPass);
        return $connect;
    }
    function all() {
        $sql = "SELECT * FROM " .$this->table;
        $conn = $this->getConnect();
        $stmt = $conn ->prepare($sql);
        $stmt->execute();
        $data = $stmt -> fetchAll(PDO::FETCH_CLASS,get_class($this));
        return $data;
}
}
?>