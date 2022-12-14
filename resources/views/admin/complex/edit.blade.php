@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="m-0 text-primary">Комплексы технологических установок</h1>
                </div>
            </div>


        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div>
                <form action="{{ route('admin.complex.update', $complex->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="NameComplex">Абривеатура комплекса</label>
                        <input type="text" name="NameComplex" class="form-control" id="NameComplex" placeholder="Абривеатура комплекс" value="{{$complex->NameComplex}}">

                        @error('NameComplex')
                        <p class="text-bg-danger">Ошибка {{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="Description">Расшифровка названия комплекса</label>
                        <textarea name="Description" class="form-control" id="Description" placeholder="Полное название комплекса">{{$complex->Description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Записать</button>
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div class="content">

@endsection
