@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->


<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
    @foreach(@$complexes as $complex)
     <div> {{ $complex->NameComplex }} -  {{ $complex->Description }}</div>
    @endforeach
@endsection
