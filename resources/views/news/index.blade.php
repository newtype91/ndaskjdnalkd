@extends('layouts.main-in')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                <div class="post--in">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <a href="{{route('news.index')}}">Новости</a> >
                            <span class="hleb--span">{{ $news->title }}</span>
                        </div>
                        <div class="post--title">
                            <h2> {{ $news->title }} </h2>
                        </div>
                        <div class="post--date">
                            <span>{{ $news->created_at->format('j.n.Y')}}</span>
                        </div>
                        <div class="post--img">
                            <img src="/storage/{{ $news->image  }}" alt="">
                        </div>
                        <div class="post--text">
                            {!! $news->body !!}
                        </div>
                        <div class="post--date" style="border-bottom: 1px solid rgb(195, 195, 195); padding-bottom: 30px; padding-top: 30px;">
                            <span>{{ $news->created_at->format('j.n.Y')}}</span>
                        </div>
                        <div class="post--buttons">
                            @if($news->id < $newsCount)
                                <a href="{{ route('news.show', $news->id + 1)}}" class="pst-button">Назад</a>
                            @endif
                             @if($news->id == $newsCount)
                                    <a href="{{route('news.index')}}" class="pst-button">Назад</a>
                                @endif

                            @if($news->id > 1)
                                <a href="{{ route('news.show', $news->id - 1)}}" class="pst-button right" >Следующая новость</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
