@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->


<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
    @foreach(@$complexes as $complex)
        <div><a href="{{route('complexes.show', $complex->id)}}">{{$complex->id}}. {{ $complex->NameComplex }} -  {{ $complex->Description }}</a></div>
    @endforeach

    <div ><a href="{{route('complexes.create')}}" class="btn btn-success mt-3">Добавить КТУ</a></div>
@endsection
