<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0 auto;
            padding: 0;
        }

        .full {
            width: 100%;
            min-height: 500px;
        }

        .header {
            display: flex;
            width: 100%;
            height: 100px;
            background-color: orange;
        }

        .text {
            position: absolute;
            top: 20px;
            left: 30px;
            width: 300px;
            height: 60px;
            background: white;
            border-radius: 20px;
        }

        .logo {
            width: 20%;
            height: 100px;
            position: relative;
        }

        .user {
            width: 80%;
            height: 100px;
        }

        .list_sb {
            width: 100%;
            min-height: 900px;
            display: flex;
        }

        .sb {
            width: 24%;
            height: 400px;
            border: 1px solid gray;
        }
    </style>
</head>

<body>
    <div class="full">
        <div class="header">
            <div class="logo">
                <div class="text">
                    <h1 style="margin-left: 40px; margin-top:10px;color: black;">EDUCATION</h1>
                </div>
            </div>

            <div class="user">
                <span style="color: white;font-size: 23px;float: right; margin-right: 200px;margin-top: 30px;">xin chao: <?= $_SESSION['user']->name ?></span>
            </div>
        </div>
        <div class="content">
            <p style="text-align: center; font-size: 50px;font-weight: bold;margin-top: 30px;margin-bottom: 30px;">DANH SÁCH QUIZ MÔN HỌC </p>
            <div class="list_sb">

                <?php
                foreach ($quiz as $cmm) :
                ?>
                    <div class="sb">
                    <a style="" href="#"><img style="width: 50%; height: 250PX; margin-left: 100px; margin-top: 20px;" src="<?= BASE_URL.'assets/img/'.$cmm->img?>" alt=""></a><br><br><br>

                        <a style="text-decoration: none; text-align: center;margin-left: 160px;font-weight: bold;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" href="<?= BASE_URL . 'quiz/lam-bai/' . $cmm->id ?>"><?= $cmm->name ?></a>

                    </div>


                <?php endforeach ?> <br> <br>

            </div>

        </div>
    </div>
    </div>
</body>

</html>