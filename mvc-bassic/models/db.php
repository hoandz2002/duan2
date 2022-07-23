<?php 
function getConnect(){
    $connect = new PDO("mysql:host=127.0.0.1;dbname=we16303_php2;charset=utf8", "root", "");
    return $connect;
}
?>