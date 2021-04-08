@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Добавить категорию</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-8">
            <form method="post" action="{{route('admin.categories.store')}}">
                @csrf
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="form-group">
                    <label for="title">Название новой категории</label>
                    <input type="text" id="title" name="title" placeholder="Назваение" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="slug">Слаг</label>
                    <input type="text" id="slug" name="slug" placeholder="Слаг" class="form-control" value="{{old('slug')}}">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Создать</button>
            </form>
        </div>
    </div>

@endsection
