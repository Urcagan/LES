@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row ">
                <div class="col-lg-6">
                    <h1 class="m-0 text-primary">Пользователи</h1>
                </div>
                <div class="col-lg-6">
                    <div class="float-sm-right"><a href="{{route('admin.user.create')}}" class="btn btn-success ">Добавить
                            пользователя</a></div>
                </div>
            </div>


        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Пользователи</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Роль</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        @foreach($roles as $id=>$role)
                                            @if($id==$user->role)
                                                <td>{{$role}}</td>
                                            @endif
                                        @endforeach
                                        <td>
                                            <div class="btn-group  ">
                                                <button type="button" class="btn btn-default " title="Обзор"
                                                        data-toggle="tooltip">
                                                    <a href="{{route('admin.user.show', $user->id)}}"> <i
                                                            class="fas fa-eye"></i></a>
                                                </button>
                                                <button type="button" class="btn  btn-outline-primary"
                                                        title="Редактировать"
                                                        data-toggle="tooltip">
                                                    <a href="{{route('admin.user.edit', $user->id)}}"><i
                                                            class="fas fa-edit"></i></a>
                                                </button>


                                                <form
                                                    action="{{route('admin.user.destroy', $user->id)}}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-primary">
                                                        <i class="fas fa-trash-alt" role="button"></i>
                                                    </button>
                                                </form>


                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div class="content">

@endsection
