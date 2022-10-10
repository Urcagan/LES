@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row ">
                <div class="col-lg-10 d-flex justify-content-between p-3">

                    <h1 class="m-0 "><a href="{{route('admin.plant.index')}}">{{$plant->NamePlant}}</a> -> {{ $unit->NameUnit }}</h1>
                    <div class="btn-group  ">

                        <button type="button" class="btn btn-default" title="Редактировать" data-toggle="tooltip">
                            <a href="{{route('admin.unit.edit', $unit->id)}}"><i class="fas fa-edit"></i></a>
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
                                       <h5>Удалить "{{ $unit->NameUnit }}" ?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <form action="{{route('admin.unit.destroy', $unit->id)}}" method="post">
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
                                <td>{{$unit->id}}</td>
                            </tr>
                            <tr>
                                <td>Описание</td>
                                <td>{{ $unit->Description }}</td>
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

    </div>
    <!-- /.content-wrapper -->




@endsection
