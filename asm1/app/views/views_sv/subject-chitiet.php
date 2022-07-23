<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>

<body>

</body>

</html>

<!--  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
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
                <span style="color: white;font-size: 23px;float: right; margin-right: 200px;margin-top: 30px;">xin chao: <?= $_SESSION['user']->name ?> </span>
            </div>
        </div>
        <div class="content">
            <p style="text-align: center; font-size: 50px;font-weight: bold;"><?= $subject->name ?></p> <br>

            <!-- <a style="color: red;" href="#"><?= $subject->name ?></a> <br> -->
            <div style="width: 1500px;">
                <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    Ngôn ngữ HTML là gì?
                    Ngôn ngữ HTML (HyperText Markup Language – ngôn ngữ siêu văn bản) là một trong các loại ngôn ngữ được sử dụng trong lập trình web. Khi truy cập một trang web cụ thể là click vào các đường link, bạn sẽ được dẫn tới nhiều trang các nhau, và các trang này được gọi là một tài liệu HTML (tập tin HTML)

                    Một trang HTML như vậy được cấu thành bởi nhiều phần tử HTML nhỏ và được quy định bằng các thẻ tag. Bạn có thể phân biệt một trang web được viết bằng ngôn ngữ HTML hay PHP thông qua đường link của nó. Ở cuối các trang HTML thường hay có đuôi là .HTML hoặc .HTM
                    <br> <br>
                    <img width="800px" height="300px" style="margin-left: 350px;" src="https://blog.webico.vn/wp-content/uploads/2017/05/html-6.jpg" alt=""> <br>
                    <br>
                    HTML là ngôn ngữ lập trình web được đánh giá là đơn giản. Mọi trang web, mọi trình duyệt web đều có thể hiển thị tốt ngôn ngữ HTML. Hiện nay, phiên bản mới nhất của HTML là HTML 5 với nhiều tính năng tốt và chất lượng hơn so với các phiên bản HTML cũ.

                    Vai trò của HTML trong lập trình web
                    Vậy, đối với các website, ngôn ngữ HTML đóng vai trò như thế nào? HTML, theo đúng nghĩa của nó, là một loại ngôn ngữ đánh dấu siêu văn bản, thế nên các chức năng của nó cũng xoay quanh yếu tố này. Cụ thể, HTML giúp cấu thành các cấu trúc cơ bản trên một website (chia khung sườn, bố cục các thành phần trang web) và góp phần hỗ trợ khai báo các tập tin kĩ thuật số như video, nhạc, hình ảnh.Ưu điểm nổi trội nhât và cũng là thế mạnh của HTML là khả năng xây dựng cấu trúc và khiến trang web đi vào quy củ một hệ thống hoàn chỉnh. Nếu bạn mong muốn sở hữu một website có cấu trúc tốt có mục đích sử dụng nhiều loại yếu tố trong văn bản, hãy hỏi HTML. Nhiều ý kiến cho rằng tùy theo mục đích sử dụng mà lập trình viên hay người dùng có thể lựa chọn ngôn ngữ lập trình riêng cho website của bạn, tuy nhiên thực chất HTML chứa những yếu tố cần thiết mà dù website của bạn có thuộc thể loại nào, giao tiếp với ngôn ngữ lập trình nào để xử lý dữ liệu thì nó vẫn phải cần đến ngôn ngữ HTML để hiển thị nội dung cho người truy cập.
                </span>
            </div>
            <button style="background-color: orange; color: white; font-weight: bold; border-radius: 50px; height: 40px;width: 170px;margin-left: 800px; margin-top: 50px;">
                <a href="<?= BASE_URL . 'sv/list-quiz?id=' . $subject->id ?>">làm Quiz online</a>
            </button>


        </div>
    </div>
    </div>
</body>

</html>