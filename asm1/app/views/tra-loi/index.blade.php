@extends('layouts.main')
@section('title','cau hoi')
@section('content')
<table border="1">
    <thead>
        <th>id</th>
        <th>content</th>
        <th>question</th>
        <th>is_correct</th>
        <th colspan="2">
            <a href="{{ BASE_URL . 'answer/tao-moi'}}">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach($answer as $sub)
            <tr>
                <td>{{ $sub->id }}</td>
                <td><a href="">{{ $sub->content }}</a></td>
                <td>{{ $sub->question_id }}</td>
                <td><?php if($sub->is_correct ==0){
                    echo "dung";}
                    else{
                        echo "sai";
                    }
                    ?>
                    </td>

                <td>
                    <a href="{{BASE_URL . 'answer/cap-nhat?id=' . $sub->id}}">Sửa</a>
                    <a href="{{BASE_URL . 'answer/xoa?id=' . $sub->id}}">Xóa</a>
                </td>
            </tr>
         @endforeach
    </tbody>
</table>
@endsection