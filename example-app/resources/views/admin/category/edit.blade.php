@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Редактирование категории</h1>
    </div>

    <!-- Content Row -->

    <div class="col-8">
        <form method="post" action="{{route('admin.categories.update', ['category' => $category])}}">
            @csrf
            <div class="form-group">
                <label for="title">Загаловок</label>
                <input type="text" id="title" name="title" placeholder="Заголовок" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="title">Автор</label>
                <input type="text" id="author" name="author" placeholder="Автор" class="form-control" value="{{old('author')}}">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>

        </form>
    </div>

@endsection
