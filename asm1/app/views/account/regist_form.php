<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dang-ky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="<?= BASE_URL . 'dang-ki' ?>" method="POST" enctype="multipart/form-data">
        <div>
            <label for="">Email</label>
            <input type="text" name="email" id="">
        </div>
        <div>
        <label for="">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
        <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <label for="">avatar</label>
            <input type="file" name="avatar" id="">
        </div>
        <button type="submit">dang ki</button>
    </form>
</body>
</html>

