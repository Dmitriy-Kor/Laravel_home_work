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
                        <h1>Показываем новость с ID {{$news}}</h1>
                        <!-- Подзоголовок -->
{{--                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>--}}
                        <!-- Автор -->
                        <span class="meta">Posted by Admin on {{ now() }}</span>
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
                    <p>Never in all their history have men been able truly to conceive of the world as one: a single
                        sphere, a globe, having the qualities of a globe, a round earth in which all the directions
                        eventually meet, in which there is no center because every point, or none, is center — an equal
                        earth which all men occupy as equals. The airman's earth, if free men make it, will be truly
                        round: a globe in practice, not in theory.</p>

                    <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no
                        turning back from science. The early warnings about technological dangers also come from
                        science.</p>

                    <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that
                        they set eye on the earth.</p>

                    <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become
                        her protectors rather than her violators. That's how I felt seeing the Earth for the first time.
                        I could not help but love and cherish her.</p>

                    <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who
                        will, the experience most certainly changes your perspective. The things that we share in our
                        world are far more valuable than those which divide us.</p>

                </div>
            </div>
        </div>
    </article>

@endsection


