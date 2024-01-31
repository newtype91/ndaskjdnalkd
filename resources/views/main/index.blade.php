@extends('layouts.main')
@section('content')
<main>
    <section class="madyr">
        <div class="madyr--in">
            <div class="hero">
                <div class="hero2">
                    <div class="h-img">
                        @foreach($sliders as $slider)
                        <div style="position: relative;">
                            <div><img src="storage/{{ $slider->image }}" alt=""></div>
                            <div class="sli-but"><a href="#">Подробнее</a></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news animate__fadeInUp">
        <div class="container">
            <div class="about-adm">
                Агентство молодежи - ваш путь к яркому будущему! Мы - зажигательная команда, преданная делу и смелым идеям. Здесь молодые души находят свое место, а мечты превращаются в реальность.
            </div>
            <div class="news-lent">
                <div class="nhplace">
                    <h2>Новости</h2>
                </div>
                <article class="artl">
                    <div class="artl-container">
                        @foreach($news_d as $new_d)
                        <div class="artl-daily">
                            <div class="artl-daily-img">
                                <a href="{{route('news.show', $new_d->id )}}">  <img src="/storage/{{ $new_d->image  }}" alt=""></a>
                            </div>
                            <div class="artl-daily-info">
                                <div class="artl-daily-date--l"> {{ $new_d->created_at->translatedFormat('j F Y H:i')}}</div>
                                <div class="artl-daily-h2">
                                    <a href="{{route('news.show', $new_d->id )}}">{{ $new_d->title }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="artl-lent">
                            @foreach($news_l as $new_l)
                            <div class="artl-lent--el">
                                <div class="artl-lent--el-img">
                                    <a href="{{route('news.show', $new_l->id )}}">  <img src="/storage/{{ $new_l->image  }}" alt=""></a>
                                </div>
                                <div class="artl-lent--el-info">
                                    <div class="--el-info-date">
                                        {{ $new_l->created_at->translatedFormat('j F Y H:i')}}
                                    </div>
                                    <div class="--el-info-h2">
                                        <a href="{{route('news.show', $new_l->id )}}">{{ $new_l->title }}</a>
                                    </div>
                                </div>
                                <a class="artl-lent--el-url" href="#"></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="artl-more">
                        <a class="artl-more-url" href="{{route('news.index')}}">Все новости</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="events animate__fadeInUp">
        <div class="container">
            <div class="ehplace">
                <h2>События</h2>
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
            <div class="artl-more">
                <a class="artl-more-url" href="{{route('events.index')}}">Все события</a>
            </div>
        </div>
    </section>
    <section class="map">
    </section>
    <section class="banners">
    </section>
</main>
@endsection
