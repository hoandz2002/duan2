<?php
$conn = new PDO("mysql:host=127.0.0.1;dbname=we16303_php2;charset=utf8", "root", "");
$sql = "SELECT p.*, u.name, (select count(*) from comments c where c.post_id = p.id) as comment_count FROM posts p join users u on p.author_id = u.id";$stmt = $conn->prepare($sql);
$stmt->execute();
$post = $stmt->fetchAll();
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
 
    <table border="1">
        <thead>
            <tr>

                <th>id</th>
                <th>title</th>
                <th>author_ id</th>
                <th>số comment</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($post as $list) { ?>
                <tr>
                    <td><?= $list['id'] ?></td>
                    <td><?= $list['title'] ?></td>
                    <td><?= $list['name'] ?></td>
                    <td><?= $list['comment_count'] ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>