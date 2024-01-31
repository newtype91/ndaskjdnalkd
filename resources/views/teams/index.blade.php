@extends('layouts.main-in')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                <div class="post--in">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <a href="{{route('teams.index')}}">Структура</a> >
                            <span class="hleb--span">{{ $team->name }}</span>
                        </div>
                        <div class="glava">
                            <div class="glava-img">
                                <img src="{{ asset('storage/' . $team->image) }}">
                            </div>
                            <div class="glava-info">
                                <p class="glava-name">
                                    {{$team->name}}
                                </p>
                                <p class="glava-pos">
                                    {{$team->position}}
                                </p>
                                <p class="glava-cont">
                                    Тел: {{$team->phone}}
                                </p>
                                <p class="glava-cont">
                                    {{$team->email}}
                                </p>
                                <!-- <a href="{{ route('teams.index', $team->id) }}" class="glava-url">Подробнее</a> -->
                            </div>
                        </div>
                        <div>
                            {!! $team->body !!}
                        </div>
                        <div class="post--buttons">
                            <a class="pst-button" href="{{ route('teams.index') }}">Назад</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
