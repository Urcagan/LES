@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="m-0">Комплексы технологических установок</h1>
                </div>
            </div>


        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div>
                <form action="{{ route('complexes.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="NameComplex">Абривеатура комплекса *</label>
                        <input value="{{ old('NameComplex') }}" type="text" name="NameComplex" class="form-control" id="NameComplex" placeholder="Абривеатура комплекс">

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
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div class="content">

@endsection
