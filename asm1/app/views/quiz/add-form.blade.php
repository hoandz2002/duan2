@extends('layouts.main')
@section('title','quiz/tao-moi')
@section('content')
<form action="" enctype="multipart/form-data" method="post">
    <div>
        <label for="">ten quiz</label>
        <input type="text" name="name">
    </div>
    <input hidden type="text" name="subject_id" value="{{$subject->id}}" id="">

    <div>
        <label for="">thoi gian lam bai</label>
        <input type="text" name="duration_minutes">
    </div>
    <div>
        <label for="">thoi gian bat dau</label>
        <input type="date" name="start_time">
    </div>
    <div>
        <label for="">thoi gian ket thuc</label>
        <input type="date" name="end_time">
    </div>
    <div>
        <label for="">avatar</label>
        <input type="file" name="img">
    </div>
    <div>
        <label for="">dao cau</label>
        <input type="radio" name="is_shuffle" value="0"> yes
        <input type="radio" name="is_shuffle" value="1"> no
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection
