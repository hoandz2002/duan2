@extends('layouts.main')
@section('title','mon-hoc')
@section('content')
<table border="1" class="table table-hover">
    <thead>
        <th>Mã môn</th>
        <th>Tên môn</th>
        <th>avatar</th>
        <th colspan="2">
            <a href="{{BASE_URL . 'mon-hoc/tao-moi'}}">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach($subjects as $sub)
            <tr>
                <td>{{$sub->id }}</td>
                <td><a href="{{BASE_URL . 'quiz/danh-sach?id='.$sub->id}}">{{$sub->name}}</a></td>
                <td><img src="{{ BASE_URL .'assets/img/' .$sub->img}}" width="100px" alt=""></td>
               
                <td>
                    <a href="{{BASE_URL . 'mon-hoc/cap-nhat/' . $sub->id}}">Sửa</a>
                    <a href="{{BASE_URL . 'mon-hoc/xoa?id=' . $sub->id}}">Xóa</a>
                </td>
            </tr>
         @endforeach 
    </tbody>
</table>
@endsection
