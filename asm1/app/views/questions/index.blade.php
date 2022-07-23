@extends('layouts.main')
@section('title','cau hoi')
@section('content')

<table border="1" class="table table-hover">
    <thead>
        <th>id</th>
        <th>Name</th>
        <th>Quiz</th>
        <th colspan="2">
            <a href="{{ BASE_URL . 'question/tao-moi'}}">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach($questions as $sub)
            <tr>
                <td>{{$sub->id}}</td>
                <td>{{ $sub->name }}</a></td>
                <td>{{ $sub->quiz_id }}</td>

                <td>
                    <a href="{{ BASE_URL . 'question/cap-nhat?id=' . $sub->id }}">Sửa</a>
                    <a href="{{ BASE_URL . 'question/xoa?id=' . $sub->id }}">Xóa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection