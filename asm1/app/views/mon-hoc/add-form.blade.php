@extends('layouts.main')
@section('title','quiz/tao-moi')
@section('content')
<form action="{{BASE_URL . 'mon-hoc/luu-tao-moi'}}" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Tên danh mục</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">avatar</label>
        <input type="file" name="img">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection
