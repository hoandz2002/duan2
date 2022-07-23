@extends('layouts.main')
@section('title','danh sách câu hỏi')
@section('content')
<form action="" method="post">
    <div>
        <label for="">content</label>
        <input type="text" name="name">
    </div>
   <input type="hidden" name="quiz_id" value="{{$quiz->id}}" id="">
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection