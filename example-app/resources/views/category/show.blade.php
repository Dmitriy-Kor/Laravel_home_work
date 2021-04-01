@extends('layouts.main')
@section('content')
    <!-- Page Header -->

    <!-- Заглавное изоображение -->
    <header class="masthead" style="background-image: url('{{asset('assets/img/' . $categoryList[$id][1])}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>Ктегория с ID {{$id}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


@endsection


