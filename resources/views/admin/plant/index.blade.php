@extends('admin.layouts.main') <!--// Указываем какой layouts используется для этой страницы-->


<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row ">
            <div class="col-lg-6">
                <h1 class="m-0 text-primary">Технологические установоки</h1>
            </div>
            <div class="col-lg-6">
                <div class="float-sm-right"><a href="{{route('admin.plant.create')}}" class="btn btn-success ">Добавить установку</a></div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        @foreach($plants as $plant)
            <div><a href="{{route('admin.plant.show', $plant->id)}}">{{$plant->id}}. {{ $plant->NamePlant }} -  {{ $plant->Description }}</a></div>
        @endforeach

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="content">

@endsection
