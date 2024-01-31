@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить сотрудника</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.teams.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group w-25">
                                <label>ФИО</label>
                                <input type="text" class="form-control" name="name" placeholder="Введите ФИО..." value="{{old('name')}}">
                                @error('name')
                                    <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="exampleInputFile">Фото</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-25">
                                <label>Почта</label>
                                <input type="text" class="form-control" name="email" placeholder="Введите дату электронную почту" value="{{old('email')}}">
                                @error('email')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Телефон</label>
                                <input type="text" class="form-control" name="phone" placeholder="Введите номер телефона" value="{{old('phone')}}">
                                @error('phone')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Приоритет выдачи</label>
                                <input type="text" class="form-control" name="head" placeholder="Введите от 0 до 3 (0 - это глава, 3 - это сотрудник)" value="{{old('head')}}">
                                @error('head')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Название должности</label>
                                <input type="text" class="form-control" name="position" placeholder="Введите должность" value="{{old('position')}}">
                                @error('position')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-75">
                                <label>Текст</label>
                                <textarea id="summernote" name="body">{{old('body')}}</textarea>
                                @error('body')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
