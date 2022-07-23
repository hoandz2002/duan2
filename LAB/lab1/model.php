<?php

function getUserByEmail($email)
{
    $connect = new PDO("mysql:host=localhost;dbname=php2;charset=utf8", "root", "");
    $sql = "SELECT * FROM users WHERE email ='$email'";
    $stm = $connect->prepare($sql);
    $stm->execute();
    return $stm->fetch();
}

?>

<!-- 
$connect = new PDO("mysql:host=localhost;dbname=php2;charset=utf8", "root", "");
$sql = "SELECT * FROM users WHERE email = '$email'";
$stmt= $connect->prepare($sql);
$stmt->execute();
return $stmt->fetch(); -->