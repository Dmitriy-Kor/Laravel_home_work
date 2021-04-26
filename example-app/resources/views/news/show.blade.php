@extends('layouts.main')
@section('content')
    <!-- Page Header -->

    <!-- Заглавное изоображение -->
    <header class="masthead" style="background-image: url('{{asset('assets/img/post-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <!-- Заголовок статьи -->
                        <h1>{{$news->title}}</h1>
                        <!-- Подзоголовок -->
{{--                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>--}}
                        <!-- Автор -->
                        <span class="meta">Posted by Admin on {{ $news->created_at ?? now() }}
                        <i>Категория: {{$news->CategoryForThisNews->title }}</i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Текст статьи -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p>{{$news->text}}</p>
                </div>
            </div>
        </div>
    </article>

@endsection


