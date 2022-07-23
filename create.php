<?php 
function ok(array $data){
    $conn = new PDO("mysql:host=127.0.0.1;dbname=we16303_php2;charset=utf8", "root", "");
    $sql = "INSERT INTO posts(title, author_id)"."VALUES( :title, :author_id)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
$data = [
    'title' => $_POST['title'],
    'author_id' => $_POST['author_id']
];
ok($data);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./create.php" method="post">
        <div>
            <label for="">title</label>
            <input type="text" name="title" id="">
        </div>
        <div>
            <label for="">author_id</label>
            <input type="text" name="author_id" id="">
        </div>
        <button>thêm mới</button>
    </form>
</body>
</html>



