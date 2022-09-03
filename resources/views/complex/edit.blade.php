@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->

<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
<div>
    <form action="{{ route('complexes.update', $complex->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="NameComplex">Абривеатура комплекса</label>
            <input type="text" name="NameComplex" class="form-control" id="NameComplex" placeholder="Абривеатура комплекс" value="{{$complex->NameComplex}}">
        </div>

        <div class="form-group">
            <label for="Description">Расшифровка названия комплекса</label>
            <textarea name="Description" class="form-control" id="Description" placeholder="Полное название комплекса">{{$complex->Description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Редактировать</button>
    </form>
</div>

@endsection
