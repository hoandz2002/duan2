<?php

use App\Controllers\AnswerController;
use App\Models\StudentQuiz;
session_start();
$result = new AnswerController();
// var_dump($_POST);die();
$answer = $result->answers($_POST, $quiz_id);
// var_dump($answer);die;
$total_qus = $answer['right'] + $answer['wrong'] + $answer['no_answer'];
$attempt_qus = $answer['right'] + $answer['wrong'];
$score = 10 / $total_qus * $answer['right'];
// $start_time = $_POST['start_time'];
// $end_time = $_POST['end_time'];
if (isset($_POST['submit'])) {
    $data = [
        'student_id' => $_POST['student_id'],
        'quiz_id' => $quiz_id,
        'start_time' => $_POST['start_time'],
        'end_time' => $_POST['end_time'],
        'score' => $_POST['score'],
    ];
    // var_dump($data);
    // die;
    $studentQuiz = new StudentQuiz();
    $studentQuiz->insert($data);
    header('Location:' . BASE_URL . 'quiz/chon-quiz?id=' . $subject_id);
}
?>


</html>

<!--  -->
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
                <span style="color: white;font-size: 23px;float: right; margin-right: 200px;margin-top: 30px;">xin chao: </span>
            </div>
        </div>
        <div class="content">
        <div class="container">
            <div>
                <h2>Kết quả quiz</h2>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Tổng số câu hỏi</th>
                            <th><?php echo $total_qus; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Câu hỏi đã chọn đáp án</td>
                            <td><?php echo $attempt_qus; ?></td>
                        </tr>
                        <tr>
                            <td>Số câu hỏi trả lời đúng </td>
                            <td><?php echo $answer['right']; ?></td>
                        </tr>
                        <tr>
                            <td>Số câu trả lời sai</td>
                            <td><?php echo $answer['wrong']; ?></td>
                        </tr>
                        <tr>
                            <td>Số câu bỏ trống</td>
                            <td><?php echo $answer['no_answer']; ?></td>
                        </tr>
                        <tr>
                            <td>Kết quả</td>
                            <td><?php
                                $score = 10 / $total_qus * $answer['right'];
                                echo $totalScore = round($score, 1) . ' điểm';
                                ?></td>
                        </tr>
                    </tbody>
                </table>
                <form action="<?= BASE_URL .'sv/subject' ?>" method="get">
                    <input type="hidden" name="student_id" value="<?= $_SESSION['user']->id ?>">
                    <input type="hidden" name="quiz_id" value="<?= $quiz_id ?>">
                    <input type="hidden" name="score" value="<?= $totalScore ?>">
                    <input hidden type="datetime" name="start_time" value="<?= $start_time ?>">
                    <input hidden type="datetime" name="end_time" value="<?= $end_time ?>">
                    <center><input name="submit" type="submit" value="Quay lại" class="btn btn-success"></center>
                </form>
            </div>
        </div>
</body>

</html>