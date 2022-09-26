@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row ">
                <div class="col-lg-10 d-flex justify-content-around ">

                    <h1 class="m-0 text-primary">{{ $user->name }}</h1>
                    <div class="btn-group  ">

                        <button type="button" class="btn btn-default" title="Редактировать" data-toggle="tooltip">
                            <a href="{{route('admin.user.edit', $user->id)}}"><i class="fas fa-edit"></i></a>
                        </button>

                            <!-- Малое модальное окно для удаления-->
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"
                                title="Удалить" >
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
                                       <h5>Удалить "{{ $user->name }} " ?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <form action="{{route('admin.user.destroy', $user->id)}}" method="post">
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
                                <td>{{$user->id}}</td>
                            </tr>
                            <tr>
                                <td>Название</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>{{ $user->email }}</td>
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

        <div><a href="{{route('admin.user.index')}}" class="btn btn-outline-dark mt-3">Назад</a></div>
        <div><a href="#" class="btn btn-outline-dark mt-3">Редактировать</a>
        </div>
        <div>
            <form action="{{route('admin.user.destroy', $user->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-outline-dark mt-3" value="Удалить" title="Удалить"
                       data-toggle="tooltip">
            </form>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
