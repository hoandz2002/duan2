@extends('layouts.main')
@section('title','quiz/cap-nhat')
@section('content')
<form action="{{BASE_URL . 'mon-hoc/luu-cap-nhat/' . $model->id}}" enctype="multipart/form-data" method="POST">
    <div>
        <label for="">Tên danh mục</label>
        <input type="text" name="name" 
            value="{{$model->name}}">
    </div>
    <div>
        <label for="">avatar</label>
        <input type="file" name="img" >
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection
