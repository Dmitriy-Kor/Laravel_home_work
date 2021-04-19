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
            @method('PUT')
            <div class="form-group">
                <label for="title">Загаловок</label>
                <input type="text" id="title" name="title" placeholder="Заголовок" class="form-control" value="{{$category->title}}">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="author">Автор</label>--}}
{{--                <input type="text" id="author" name="author" placeholder="Автор" class="form-control" value="{{old('author')}}">--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="title">Описание</label>
                <textarea type="text" id="description" name="description" placeholder="Описание" class="form-control" >{!! $category->description !!}</textarea>
            </div>
            <div class="form-group">
                <label for="is_visible">Отобразить</label>
                <input type="checkbox" id="is_visible" name="is_visible" value="1" @if ($category->is_visible === true) checked @endif">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>

        </form>
    </div>

@endsection
