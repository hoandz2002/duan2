@extends('layouts.main')
@section('title','list-quiz')
@section('content')

<table border="1" style="width: 500px;">
    <thead>
        <th>Mã quiz</th>
        <th>Tên quiz</th>
        <th>mã môn</th>
        <th>Thời gian làm bài</th>
        <th>Thời gian bắt đầu</th>
        <th>Thời gian kết thúc</th>
        <th>avatar</th>
        <th>Xáo trộn</th>
        <th colspan="2">Chức năng</th>        
    </thead>
    <tbody>
        <?php

use App\Models\Subject;

foreach($model as $sub): 
            $subjects = Subject::all();
            ?>
            <tr>
                <td> {{$sub->id}}</td>
                <td><a href="{{ BASE_URL . 'question/list-question?quiz_id='.$sub->id}}"><?= $sub->name ?></a></td>
                <!-- <?php foreach($subjects as $value){ 
                    if($value->id == $sub->subject_id) { ?>
                        <td><?= $value->name ?></td>
                  <?php  }
                 } ?> -->
                                 <td> {{$sub->subject_id}} </td>

                <td>{{$sub->duration_minutes}}  </td>
                <td>{{$sub->start_time}}  </td>
                <td>{{$sub->end_time}}  </td>
                <td><img src="<?= BASE_URL .'assets/img/' .$sub->img ?>" width="100px" alt=""></td>

                <td><?php 
                if($sub->is_shuffle == 0){
                    echo "yes";
                }
                else{
                    echo "no";
                }
                ?></td>

                <td>
                    <a href="<?= BASE_URL . 'quiz/cap-nhat?id=' . $sub->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . 'quiz/xoa?id=' . $sub->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="<?= BASE_URL . 'quiz/tao-moi'?>">Tạo mới</a>
@endsection