
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="cmmwords">

    <title>Document</title>
    <meta content="" name="description">

    <script type="text/javascript">
        function setTime() {
            var hours = Math.floor(timeLeft / 3600);
            var minute = Math.floor((timeLeft - (hours * 60 * 60) - 30) / 60);
            var second = timeLeft % 60;
            var hrs = checktime(hours);
            var mint = checktime(minute);
            var sec = checktime(second);
            if (timeLeft <= 0) {
                clearTimeout(tm);
                document.getElementById("form1").submit();
            } else {

                document.getElementById("time").innerHTML = hrs + ":" + mint + ":" + sec;
            }
            timeLeft--;
            var tm = setTimeout(function() {
                setTime()
            }, 1000);
        }

        function checktime(msg) {
            if (msg < 10) {
                msg = "0" + msg;
            }
            return msg;
        }
    </script>
    <style>
        .answer p {
            display: inline;
        }

        th p {
            display: inline;
        }
    </style>
    <style>
        * {
            margin: 0 ;
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

<body  onload="setTime()";>
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
            <div>
            <h2 style="margin-top: 20px;"><span style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left: 20px;color: orange;">Quiz online</span>
                <script type="text/javascript">
                    var timeLeft = <?php echo $quiz->duration_minutes ?> * 60;
                </script>

                <div id="time" style="float:right; margin-right: 12px;color: orange;">timeout</div>
            </h2>
            <?php

            use App\Models\Answer;
            use App\Models\Question;

            $no = 1;
            ?>
            <form method="POST"  action="<?= BASE_URL . 'answer/dap-an?quiz_id=' .$quiz->id .'&id='.$quiz->subject_id   ?>">
                <?php foreach ($questions as $cmm) { ?>
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <?= $no++ . '. ' . $cmm->name ?>
                                </th>
                            </tr>
                        </thead>
                        <?php $answers = Answer::where('question_id', '=', $cmm->id)->get(); ?>
                        <tbody>
                            <?php foreach ($answers as $value) { ?>
                                <tr>
                                    <td>&nbsp;&emsp;<input style="margin-left: 20px;" type="radio" value="<?= $value->id ?>" name="<?= $cmm->id ?>" />&nbsp;<span class="answer"><?php echo $value->content; ?></span></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>

                <center><input style="background-color: orange; color: white; font-weight: bold; border-radius: 50px; height: 40px;width: 100px; margin-top: 50px;" type="submit" value="Nộp bài"></center>
            </form>
        </div>

        </div>
    </div>
    </div>
</body>

</html>