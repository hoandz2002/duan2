<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
   <a style="color: red;" href="#"><?= $subject->name ?></a> <br>
   <button><a href="<?= BASE_URL . 'quiz/danh-sach?id='.$subject->id?>">làm Quiz online</a></button>
</body>
</html>