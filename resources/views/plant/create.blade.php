@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->

<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
<div>
    <form action="{{ route('plants.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="NamePlant">Абривеатура установки</label>
            <input
                value="{{ old('NamePlant') }}"
                type="text" name="NamePlant" class="form-control" id="NamePlant" placeholder="Абривеатура установки">

            @error('NamePlant')
            <p class="text-bg-danger">Ошибка {{ $message }}</p>
            @enderror

        </div>

        <div class="form-group">
            <label for="Description">Расшифровка названия установки</label>
            <textarea name="Description" class="form-control" id="Description" placeholder="Полное название установки"></textarea>

        </div>

        <div class="form-group">
            <label for="complex_id">Выберите комплекс</label>
            <select class="form-select" id="complex_id" name="complex_id">
                <option value=""></option>
                @foreach($complexes as $complex)
                    <option
                        {{old('complex_id') == $complex->id ? ' selected' : '' }}
                        value="{{$complex->id}}">{{$complex->NameComplex}}</option>
                @endforeach
            </select>

            @error('complex_id')
            <p class="text-bg-danger">Ошибка {{ $message }}</p>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary mt-3">Создать</button>
    </form>
</div>

@endsection
