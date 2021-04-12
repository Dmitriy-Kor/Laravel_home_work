@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Редактирование новости</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-8">

        <form method="post" action="{{route('admin.news.update', ['news' => $news])}}">
            @csrf
            <div class="form-group">
                <label for="title">Загаловок</label>
                <input type="text" id="title" name="title" placeholder="Заголовок" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="title">Автор</label>
                <input type="text" id="author" name="author" placeholder="Автор" class="form-control" value="{{old('author')}}">
            </div>
            <div class="form-group">
                <label for="title">Текст</label>
                <textarea id="text" name="text" placeholder="Текст новости" class="form-control" value="{{old('text')}}"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>

        </form>
        </div>
    </div>


@endsection
