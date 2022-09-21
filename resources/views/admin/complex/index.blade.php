@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row ">
                <div class="col-lg-6">
                    <h1 class="m-0 text-primary">Комплексы технологических установок</h1>
                </div>
                <div class="col-lg-6">
                    <div class="float-sm-right"><a href="{{route('admin.complex.create')}}" class="btn btn-success ">Добавить
                            КТУ</a></div>
                </div>
            </div>


        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <!-- Card -->
            <div class="content mt-3">

                <div class="container-fluid">
                    <div class="row">
                        @foreach($complexes as $complex)
                            <div class="col-lg-3 ">
                                <div class="card card-primary card-outline ">
                                    <div class="card-header">
                                        <h5 class="card-title m-0">{{ $complex->NameComplex }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $complex->Description }}</p>
                                        <div class="d-flex justify-content-end">
                                            <div class="btn-group  ">
                                                <button type="button" class="btn btn-default" title="Обзор"
                                                        data-toggle="tooltip">
                                                    <a href="{{route('admin.complex.show', $complex->id)}}"> <i
                                                            class="fas fa-eye"></i></a>
                                                </button>
                                                <button type="button" class="btn btn-default" title="Редактировать"
                                                        data-toggle="tooltip">
                                                    <a href="{{route('admin.complex.edit', $complex->id)}}"><i class="fas fa-edit"></i></a>

                                                </button>
                                                <button type="button" class="btn btn-default" title="Удалить"
                                                        data-toggle="tooltip">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div class="content">

@endsection
