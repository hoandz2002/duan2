<?php 
require_once "./models/Post.php";
require_once "./models/User.php";

$postmodel = new Post();
$usermodel = new User();

$post = $postmodel->all();
$user = $usermodel->all();

echo "<pre>";
var_dump($postmodel);
?>