@extends('layouts.main-pag')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <span class="hleb--span">События</span>
                        </div>
                        <div class="post--title">
                            <h2 style="color: #f8bd29;">События</h2>
                        </div>
                        <div class="events-lent">
                            @foreach($events as $event)
                                <div class="event">
                                    <div class="event--date">
                                        <div class="e-d--date">
                                            <p class="ed--day"> {{ \Carbon\Carbon::parse($event->date)->translatedFormat('j')}}</p>
                                            <p class="ed--month">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('F')}}</p>
                                            <p class="ed--weekday">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('l')}}</p>
                                        </div>
                                        <hr>
                                        <div class="e-d--time">
                                            <p class="ed--time">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('H:i')}}</p>
                                            <p class="ed-loc">{{ $event->location }}</p>
                                        </div>
                                    </div>
                                    <div class="event--img">
                                        <img src="storage/{{ $event->image }}" alt="">
                                    </div>
                                    <div class="event--title"><a href="{{route('events.show', $event->id )}}">{{ $event->title }}</a> </div>
                                    <div class="event--speakers">
                                        <div class="speakers--name">
                                            <p>{{ $event->speaker }}</p>
                                        </div>
                                        <div class="speakers--div">
                                            <a href="{{route('events.show', $event->id )}}">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            </div>

        </section>
        <div class="bb"> {{ $events->links() }} </div>
    </main>
@endsection
