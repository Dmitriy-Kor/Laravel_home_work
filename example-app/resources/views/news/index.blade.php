@extends('layouts.main')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('assets/img/home-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Новостной сайт</h1>
                        <span class="subheading">Учусь использовать Laravel</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if(count($newsList)>0)
    @foreach ($newsList as $key => $news)
        <div class="post-preview">
            <a href="{{ route('news.show', ['id' => ++$key]) }}">
                <h2 class="post-title">
                    {!!$news!!}
                </h2>
                {{-- <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3> --}}
            </a>
            <p class="post-meta">Posted by Admin

                {{ now() }}</p>
        </div>
        <hr>
    @endforeach
@else
    <h2>Новостей нет :( </h2>
@endif
@endsection

