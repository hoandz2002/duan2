@extends('layouts.main')
@section('title','danh sách câu hỏi')
@section('content')
<form action="" method="POST">
    <div>
        <label for="">content</label>
        <input type="text" name="name" 
            value="<?= $model->name ?>">
    </div>
    <div>
        <label for="">quiz</label>
        <input type="text" name="quiz_id" 
            value="<?= $model->quiz_id?>">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection('content')