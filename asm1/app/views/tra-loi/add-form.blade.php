@extends('layouts.main')
@section('title','danh sách câu hỏi')
@section('content')
<form action="" method="post">
    <div>
        <label for="">content</label>
        <input type="text" name="content">
    </div>
    <div>
        <input type="text" name="question_id" hidden value="<?=$id?>">
    </div>
    <div>
        <label for="">is_correct</label>
        <input type="radio" name="is_correct" value="0" id=""> dung
        <input type="radio" name="is_correct" value="1" id=""> sai
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection('content')
@section('page-script')