@extends('layouts.main-in')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                <div class="post--in">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <a href="{{route('events.index')}}">События</a> >
                            <span class="hleb--span">{{ $event->title }}</span>
                        </div>
                        <div class="post--title">
                            <h2> {{ $event->title }} </h2>
                        </div>
                        <div class="event-post--cont">
                            <div class="event-post--img">
                                <img src="/storage/{{ $event->image  }}">
                            </div>
                            <div class="event-post--date">
                                <div class="event-post--auth">
                                    <h4>Спикеры</h4>
                                    <p>{{ $event->speaker }}</p>
                                </div>
                                <div class="event-post--day">
                                    <h4>Место</h4>
                                    <p>{{ \Carbon\Carbon::parse($event->date)->translatedFormat('j F Y H:i') }}</p>
                                    <p>{{ $event->location }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="post--text">
                            {!! $event->body !!}
                        </div>
                        <div class="post--buttons">
                            <a class="pst-button" href="{{ route('main.index') }}">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
