@extends('layouts.main-pag')
@section('content')
    <main>
        <section class="post">
            <div class="container">
                <div class="post--in">
                    <div class="post-content">
                        <div class="hleb">
                            <a href="{{route('main.index')}}">Главная</a> >
                            <span class="hleb--span">Документы</span>
                        </div>
                        <div class="post--title">
                            <h2 style="color: #f8bd29;">Документы</h2>
                        </div>
                        @foreach($docs as $doc)
                            <div class="doc">
                                <div class="doc-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="doc-title">
                                    <div>{{$doc->title}}</div>
                                    <a href="storage/{{$doc->doc}}">Скачать</a>
                                </div>
                                <div class="doc-type">
                                    {{$doc->type}}
                                </div>
                                <div class="doc-date">
                                    {{$doc->date}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
