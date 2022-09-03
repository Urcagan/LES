@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->


<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->

    <div> {{$complex->id}}. {{ $complex->NameComplex }} -  {{ $complex->Description }}</div>
    <div ><a href="{{route('complexes.index')}}" class="btn btn-outline-dark mt-3">Назад</a></div>
    <div ><a href="{{route('complexes.edit', $complex->id)}}" class="btn btn-outline-dark mt-3">Редактировать</a></div>
    <div >
        <form action="{{route('complexes.destroy', $complex->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-outline-dark mt-3" value="Удалить">
        </form>
    </div>
@endsection
