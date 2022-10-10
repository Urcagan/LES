@extends('admin.layouts.main') <!--// Указываем какой layouts используется для этой страницы-->

<!-- //  описываем содержммое секций для страницы -->
@section('content') <!-- // указываем имя секции -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row ">
            <div class="col-lg-10 d-flex p-3 justify-content-between ">

                <h1 class="m-0 "> <a href="{{route('admin.plant.index')}}">{{$complex->NameComplex}}</a> -> {{ $plant->NamePlant }}</h1>
                <div class="btn-group">

                    <button type="button" class="btn btn-default" title="Редактировать" data-toggle="tooltip">
                        <a href="{{route('admin.plant.edit', $plant->id)}}"><i class="fas fa-edit"></i></a>
                    </button>

                    <button type="button" class="btn btn-default" title="Удалить" data-toggle="tooltip">
                        <a href="#"> <i class="fas fa-trash-alt"></i></a>
                    </button>

                    <!-- Малое модальное окно для удаления-->
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"
                            title="Удалить" data-toggle="tooltip">
                        <i class="fas fa-trash-alt "></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Удаление</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Удалить "{{ $plant->NamePlant }}" ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <form action="{{route('admin.plant.destroy', $plant->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="col-10">
            <div class="card">
                <div class="card-body  p-0">
                    <table class="table text-nowrap">
                        <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{$plant->id}}</td>
                        </tr>
                        <tr>
                            <td>Название</td>
                            <td>{{ $plant->Description }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Агрегаты установки</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Описание</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($units as $unit)
                            <tr>
                                <td>{{$unit->NameUnit}}</td>
                                <td>{{$unit->Description}}</td>
                                @endforeach
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </section>
    <!-- /.content -->

    <div class="p-3"><a href="{{route('admin.plant.index')}}" class="btn btn-outline-dark mt-3">Назад</a></div>


</div>
<!-- /.content-wrapper -->

@endsection
