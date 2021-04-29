@extends('layouts.main')
@section('content')
    <!-- Page Header -->
    <!-- Заглавное изоображение -->
    <header class="masthead" style="background-image: url('{{asset('assets/img/' . $category->image)}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>Новости из ктегории: {{$category->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if(count($newsList)>0)
        @foreach ($newsList as $news)
            @if($news->category_id == $category->id)
            <div class="post-preview">
                <a href="{{ route('news.show', ['id' => $news->id]) }}">
                    <h2 class="post-title">
                        {!!$news->title!!}
                    </h2>
                    {{-- <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3> --}}
                </a>
                <p class="post-meta">Posted by Admin {{ $news->created_at ?? now() }}
                    <i>Категория: {{$news->CategoryForThisNews->title }}</i>
                </p>
            </div>
            <hr>
            @endif
        @endforeach
    @else
        <h2>Новостей нет :( </h2>
    @endif

@endsection




