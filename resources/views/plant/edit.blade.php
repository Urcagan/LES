@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->

<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
<div>
    <form action="{{ route('plants.update', $plant->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="NamePlant">Абривеатура установки</label>
            <input type="text" name="NamePlant" class="form-control" id="NamePlant" placeholder="Абривеатура установки" value="{{$plant->NamePlant}}">
        </div>

        <div class="form-group">
            <label for="Description">Расшифровка названия установки</label>
            <textarea name="Description" class="form-control" id="Description" placeholder="Полное название установки">{{$plant->Description}}</textarea>
        </div>

        <div class="form-group">
            <label for="complex_id">Выберите комплекс</label>
            <input type="text" name="complex_id" class="form-control" id="complex_id" placeholder="Выберете комплекс" value="{{$plant->complex_id}}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Редактировать</button>
    </form>
</div>

@endsection
