@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать документ</h1>
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
                        <form action="{{ route('admin.docs.update', $doc->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Введите название..." value="{{$doc->title}}">
                                @error('title')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Тип</label>
                                <input type="text" class="form-control" name="type" placeholder="Введите тип документа" value="{{$doc->type}}">
                                @error('type')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Дата принятия</label>
                                <input type="text" class="form-control" name="date" placeholder="Введите дату принятия в формате 01.01.2021" value="{{$doc->date}}">
                                @error('date')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="exampleInputFile">Файл документа</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="doc">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
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
