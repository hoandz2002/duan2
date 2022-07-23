@extends('layouts.main')
@section('title','list-quiz')
@section('content')

    
    @foreach ($quiz as $cmm)
        <p></p>
        <a href="{{BASE_URL . 'quiz/chi-tiet-quiz/'.$cmm->id}}">{{$cmm->name}}</a>
    @endforeach <br> <br>
    <button style="background-color: red; color: white;  font-weight: bold;">
        <a style="color: white; text-decoration: none;" href="{{BASE_URL.'quiz/them?id='.$id}}">thêm mới quiz</a>
    </button>
@endsection