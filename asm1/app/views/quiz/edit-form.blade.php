@extends('layouts.main')
@section('title','quiz/tao-moi')
@section('content')
<form action="" enctype="multipart/form-data" method="POST">
  
   
    <div>
        <label for="">Tên quiz</label>
        <input type="text" name="name" 
            value="<?= $model->name ?>">
    </div>
    <div>
        <label for="">mã môn</label>
        <input type="text" name="subject_id" 
            value="<?= $model->subject_id ?>">
    </div>
    <div>
        <label for="">Thời gian làm bài</label>
        <input type="number" name="duration_minutes" 
            value="<?= $model->duration_minutes ?>">
    </div>
    <div>
        <label for="">Thời gian bắt đầu</label>
        <input type="date" name="start_time" 
            value="<?= $model->start_time ?>">
    </div>
    <div>
        <label for="">Thời gian kết thúc</label>
        <input type="date" name="end_time" 
            value="<?= $model->end_time ?>">
    </div>
    <div>
        <label for="">avatar</label>
        <input type="file" name="img" >
    </div>
    <div>
        <label for="">Xáo trộn</label>
        <input type="text" name="is_shuffle" 
            value="<?= $model->is_shuffle ?>">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection