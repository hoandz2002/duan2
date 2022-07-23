<?php

use Illuminate\Database\Eloquent\Model;
?>
@extends('layouts.main')
@section('title','danh sách câu hỏi')
@section('content')
<form action="<?= BASE_URL . 'answer/luu-cap-nhat?question_id='.$model->id?>" method="POST">
    <div>
        <label for="">content</label>
        <input type="text" name="content" 
            value="<?= $model->content ?>">
    </div>
    <div>
        <!-- <label for="">question</label> -->
        <input type="text" hidden name="question_id" 
            value="<?= $model->question_id?>">
    </div>
    <div>
        <label for="">is_correct</label>
        <input type="text" name="is_correct" 
            value="<?= $model->is_correct?>">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
@endsection('content')
@section('page-script')