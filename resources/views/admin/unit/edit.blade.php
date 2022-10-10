@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="m-0 text-primary">{{ $unit->NameUnit }}</h1>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="col-lg-8 ">
                <form action="{{route('admin.unit.update', $unit->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="NameUnit">Абривеатура агрегата *</label>
                        <input type="text" name="NameUnit" class="form-control"
                               id="NameUnit" placeholder="Абривеатура агрегата"
                               value="{{$unit->NameUnit}}">

                        @error('NameUnit')
                        <p class="text-danger">Ошибка {{ $message }}</p>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="Description">Описание агрегата</label>
                        <textarea name="Description" class="form-control" id="Description"
                                  placeholder="Описание агрегата">{{$unit->Description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="plant_id">Выберите установку</label>
                        <select class="form-select" id="plant_id" name="plant_id">
                            @foreach($plants as $plant)
                                <option
                                    {{$plant->id == $unit->plant_id ? ' selected' : '' }}
                                    value="{{$plant->id}}">{{$plant->NamePlant}}</option>
                            @endforeach
                        </select>
                        @error('plant_id')
                        <p class="text-bg-danger">Ошибка {{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Обновить</button>
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div class="content">

@endsection
