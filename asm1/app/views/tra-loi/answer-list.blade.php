@extends('layouts.main')
@section('title','danh sách câu hỏi')
@section('content')
<h5 class="card-title">Danh sách dap an</h5> <br>
<a href="<?= BASE_URL . 'answer/tao-moi/' . $question_id?>" class="btn btn-success">Thêm mới</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nội dung</th>
            <th scope="col">ket qua</th>
            <th colspan="3" scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($answers); $i++) { ?>
            <tr>
                <th scope="row"><?= $answers[$i]->id ?></th>
                <td><?= $answers[$i]->content ?></td>
                <td><?php if($answers[$i]->is_correct ==0){
                    echo "dung";
                }
                else{
                echo "sai";
                }
                ?></td>

                <td>
                <a href="<?= BASE_URL . 'answer/cap-nhat?question_id=' . $answers[$i]->id ?>" class="btn btn-primary">Cập nhật</a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="<?= BASE_URL . 'answer/xoa/' . $answers[$i]->id .'/' . $question_id ?>" class="btn btn-danger">Xóa</a>
            </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
@endsection('content')
@section('page-script')