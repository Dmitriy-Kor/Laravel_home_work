@extends('layouts.main')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset('assets/img/contact-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Форма отправленна</h1>
                        <span class="subheading"><a href="{{ route('home') }}">Вернуться на главную страницу</a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection

