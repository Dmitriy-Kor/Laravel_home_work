@extends('layouts.main')
@section('content')
    <!-- Page Header -->

    <header class="masthead" style="background-image: url('{{asset('assets/img/about-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Новостные категории</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if(count($categoryList)>0)
        @foreach ($categoryList as $category)
            <div class="category" style="background-image: url({{asset('assets/img/'. $category->image)}})">
                <div class="category_box">
                    <a class="category_link" href="{{ route('categories.show', ['id' => $category->id]) }}">
                        <h2>{{$category->title}}</h2>
                    </a>
                    <p class="category_p">Обновлено {{ now() }}</p>
                </div>
            </div>
        @endforeach
    @else
        <h2>Нет категорий :( </h2>
    @endif

@endsection


