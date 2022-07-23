<?php
require_once './model.php';
function main(){
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email'])){
        $email = $_POST['email'];
        $user = getUserByEmail($email);
    }
    include_once './view.php';
}

?>