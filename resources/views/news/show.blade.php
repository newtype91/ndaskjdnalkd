@extends('layouts.main-pag')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <span class="hleb--span">Новости</span>
                        </div>
                        <div class="post--title">
                            <h2 style="color: #f8bd29;">Новости</h2>
                        </div>
                        <div class="artl-lent-news">
                            @foreach($news as $new)
                                <div class="artl-lent--el kk">
                                    <div class="artl-lent--el-img-n">
                                        <a href="{{route('news.show', $new->id )}}"><img src="/storage/{{ $new->image }}" alt=""></a>
                                    </div>
                                    <div class="artl-lent--el-info">
                                        <div class="--el-info-date">
                                            {{ $new->created_at->translatedFormat('j F Y H:i')}}
                                        </div>
                                        <div class="--el-info-h2">
                                            <a href="{{route('news.show', $new->id )}}">{{ $new->title }}</a>
                                        </div>
                                    </div>
                                    <a class="artl-lent--el-url" href="#"></a>
                                </div>
                            @endforeach
                        </div>


                    </div>
            </div>

        </section>
        <div class="bb"> {{ $news->links() }} </div>
    </main>
@endsection
