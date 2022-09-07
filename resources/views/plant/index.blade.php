@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->


<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
    @foreach($plants as $plant)
        <div><a href="{{route('plants.show', $plant->id)}}">{{$plant->id}}. {{ $plant->NamePlant }} -  {{ $plant->Description }}</a></div>
    @endforeach

    <div ><a href="{{route('plants.create')}}" class="btn btn-success mt-3">Добавить установку</a></div>
@endsection
