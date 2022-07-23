<table border="1" style="width: 500px;">
    <thead>
    <th>id</th>
        <th>Name</th>
        <th>Quiz</th>
        <th colspan="2">Chức năng</th>        
    </thead>
    <tbody>
        <?php

use App\Models\Quiz;

foreach($questions as $sub): 
    $quizs = Quiz::all();

            ?>
            <tr>
                <td><?= $sub->id ?></td>
                <td><a href="<?= BASE_URL . 'answer/list-answer?question='.$sub->id?>"><?= $sub->name ?></a></td>
               <?php foreach($quizs as $value){ 
                    if($value->id == $sub->id) { ?>
                        <td><?= $value->name ?></td>
                  <?php  }
                 } ?>
                <td>
                    <a href="<?= BASE_URL . 'question/cap-nhat?id=' . $sub->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'question/xoa?id=' . $sub->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="<?= BASE_URL . 'question/tao-moi'?>">Tạo mới</a>
