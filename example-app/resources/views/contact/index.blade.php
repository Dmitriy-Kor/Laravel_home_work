@extends('layouts.main')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{asset('assets/img/contact-bg.jpg')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Свяжитесь с нами</h1>
                        <span class="subheading">Остались вопросы? Найдем ответы.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Хотите с нами связаться? Заполните форму ниже, чтобы отправить нам сообщение, и мы свяжемся с вами как можно скорее!</p>

                <form name="sentMessage" id="contactForm" novalidate method="post" action="{{ route('contact.store') }}">

                    @csrf
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Имя</label>
                            <input type="text" class="form-control" placeholder="Имя" name="name" id="name" required data-validation-required-message="Please enter your name." value="{{old('name')}}">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required data-validation-required-message="Please enter your email address." value="{{old('email')}}">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Телефон</label>
                            <input type="tel" class="form-control" placeholder="Телефон" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." value="{{old('phone')}}">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Текст сообщения</label>
                            <textarea rows="5" class="form-control" placeholder="Текст сообщения" name="message" id="message" required data-validation-required-message="Please enter a message." value="{{old('message')}}"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
