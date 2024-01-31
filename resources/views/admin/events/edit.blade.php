@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать событие</h1>
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
                        <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <label>Заголовок</label>
                                <input type="text" class="form-control" name="title" placeholder="Введите заголовок..." value="{{ $event->title }}">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="" class="w-50">
                            </div>
                            <div class="form-group w-25">
                                <label for="exampleInputFile">Картинка</label>
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
                                <label>Дата проведения</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="datetime-local" name="date" class="form-control" value="{{ $event->date }}">
                                </div>
                                @error('date')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Время проведения</label>
                                <input type="text" class="form-control" name="location" placeholder="Введите адрес" value="{{ $event->location }}">
                                @error('location')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Спикеры</label>
                                <input type="text" class="form-control" name="speaker" placeholder="Введите спикеров" value="{{ $event->speaker }}">
                                @error('speaker')
                                <div class="text-danger">Заполните это поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea id="summernote" name="body" >{{ $event->body }}</textarea>
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
