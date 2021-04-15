@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Добавить новость</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-8">
        <form method="post" action="{{route('admin.news.store')}}">
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="category_id">Выбирите новосную категорию</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option>Выбирите категорию</option>
                    @foreach($categoryList as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Загаловок</label>
                <input type="text" id="title" name="title" placeholder="Заголовок" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="slug">Слаг</label>
                <input type="text" id="slug" name="slug" placeholder="Слаг" class="form-control" value="{{old('slug')}}">
            </div>
            <div class="form-group">
                <label for="text">Описание</label>
                <textarea type="text" id="description" name="description" placeholder="Описание" class="form-control" >{!! old('description') !!}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Выбирите новосную категорию</label>
                <select name="status" id="category_id" class="form-control">
                    <option>Выбирите статус</option>
                    <option value="{{\App\Enums\NewsStatusEnum::PUBLISHED}}">Опубликовать</option>
                    <option value="{{\App\Enums\NewsStatusEnum::BLOCKED}}">Блокировать</option>
                    <option value="{{\App\Enums\NewsStatusEnum::DRAFT}}">Черновик</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
        </div>
    </div>

@endsection
