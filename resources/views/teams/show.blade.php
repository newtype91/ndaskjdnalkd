@extends('layouts.main-pag')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                <div class="post--in">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <span class="hleb--span">Структура</span>
                        </div>
                        <div class="post--title">
                            <h2 style="color: #f8bd29;">Структура</h2>
                        </div>
                        @foreach($zero as $zero)
                            <div class="glava">
                                <div class="glava-img">
                                    <img src="storage/{{$zero->image}}">
                                </div>
                                <div class="glava-info">
                                    <p class="glava-name">
                                        {{$zero->name}}
                                    </p>
                                    <p class="glava-pos">
                                        {{$zero->position}}
                                    </p>
                                    <p class="glava-cont">
                                        Тел: {{$zero->phone}}
                                    </p>
                                    <p class="glava-cont">
                                        {{$zero->email}}
                                    </p>
                                    <!-- <a href="{{ route('teams.index', $zero->id) }}" class="glava-url">Подробнее</a> -->
                                </div>
                            </div>
                        @endforeach
                        <div class="team-l">
                            @foreach($teams as $team)
                            <div class="team-p">
                                <div class="team-p-img">
                                    <img src="storage/{{$team->image}}">
                                </div>
                                <div class="team-p-info">
                                    <p class="team-p-name">
                                        {{ $team->name }}
                                    </p>
                                    <p class="team-p-pos">
                                        {{$team->position}}
                                    </p>
                                    <p class="team-p-cont">
                                        Тел: {{ $team->phone }}
                                    </p>
                                    <p class="team-p-cont">
                                        {{ $team->email }}
                                    </p>
                                    <!-- <a href="{{route('teams.index', $team->id)}}" class="team-p-url">Подробнее</a> -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
