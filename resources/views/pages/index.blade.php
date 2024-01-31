@extends('layouts.main-pag')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                <div class="post--in">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <span class="hleb--span">{{ $page->title }}</span>
                        </div>
                        <div class="post--title">
                            <h2 style="color: #f8bd29;"> {{ $page->title }}</h2>
                        </div>
                        <div class="post--text">
                            {!! $page->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
