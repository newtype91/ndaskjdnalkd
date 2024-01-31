@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить страницу</h1>
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
                        <form action="{{route('admin.pages.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group w-25">
                                <label>Название страницы</label>
                                <input type="text" class="form-control" name="title" placeholder="Введите заголовок..." value="{{old('title')}}">
                                @error('title')
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
