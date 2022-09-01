@extends('layouts.main') <!--// Указываем какой layouts используется для этой страницы-->


<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->
    @foreach(@$complexes as $complex)
     <div> {{ $complex->NameComplex }} -  {{ $complex->Description }}</div>
    @endforeach

<div>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
        </thead>

        <tbody>
        @foreach(@$complexes as $complex)
        <tr>
            <th scope="row">{{ @$complex->id  }}</th>
            <td>{{ $complex->NameComplex }}</td>
            <td>{{ $complex->Description }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
