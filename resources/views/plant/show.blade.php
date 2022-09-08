@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->


<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->

    <div> {{$plant->id}}. {{ $plant->NamePlant }} -  {{ $plant->Description }}</div>
    <div ><a href="{{route('plants.index')}}" class="btn btn-outline-dark mt-3">Назад</a></div>
    <div ><a href="{{route('plants.edit', $plant->id)}}" class="btn btn-outline-dark mt-3">Редактировать</a></div>
    <div >
        <form action="{{route('plants.destroy', $plant->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-outline-dark mt-3" value="Удалить">
        </form>
    </div>
    <div class="container">
        <h5 class="mt-3">Входит в комплекс</h5>
            <div>{{$complex->NameComplex}}</div>
    </div>
@endsection
