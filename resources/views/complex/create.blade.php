@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->

<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
<div>
    <form action="{{ route('complexes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="NameComplex">Абривеатура комплекса</label>
            <input type="text" name="NameComplex" class="form-control" id="NameComplex" placeholder="Абривеатура комплекс"
                   value="{{ old('NameComplex') }}>

            @error('NameComplex')
                <p class="text-bg-danger">Ошибка {{ $message }}</p>
            @enderror

        </div>

        <div class="form-group">
            <label for="Description">Расшифровка названия комплекса</label>
            <textarea name="Description" class="form-control" id="Description" placeholder="Полное название комплекса"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Создать</button>
    </form>
</div>

@endsection
