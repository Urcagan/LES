@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="m-0 text-primary">Редактирование пользователя</h1>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="col-lg-4 ">
                <form action="{{route('admin.user.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name">Имя пользователя</label>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="Имя пользователя" value="{{ $user->name }}">
                        @error('name')
                        <p class="text-danger">Ошибка {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Ваша почта</label>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="Ваша почта" value="{{ $user->email }}">
                        @error('email')
                        <p class="text-danger">Ошибка {{ $message }}</p>
                        @enderror
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
