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
            @method('PUT')

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="category_id">Выбирите новосную категорию</label>
                <select name="category_id" id="category_id" class="form-control" @error('category_id') style="border: red 1px solid;" @enderror>
                    <option>Выбирите категорию</option>
                    @foreach($categoryList as $category)
                        <option value="{{$category->id}}" @if($category->id === $news->category_id) selected @endif>{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Загаловок</label>
                <input type="text" id="title" name="title" @error('title') style="border: red 1px solid;" @enderror placeholder="Заголовок" class="form-control" value="{{$news->title}}">
            </div>

            <div class="form-group">
                <label for="slug">Слаг</label>
                <input type="text" id="slug" name="slug" @error('slug') style="border: red 1px solid;" @enderror placeholder="Слаг" class="form-control" value="{{$news->slug}}">
            </div>

            <div class="form-group">
                <label for="text">Текст</label>
                <textarea id="text" name="text" @error('text') style="border: red 1px solid;" @enderror class="form-control">{{$news->text}}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Выбирите новосную категорию</label>
                <select name="status" id="status" class="form-control" @error('status') style="border: red 1px solid;" @enderror>
                    <option>Выбирите статус</option>
                    <option value="{{\App\Enums\NewsStatusEnum::PUBLISHED}}" @if ($news->status == \App\Enums\NewsStatusEnum::PUBLISHED ) selected @endif>Опубликовать</option>
                    <option value="{{\App\Enums\NewsStatusEnum::BLOCKED}}" @if ($news->status == \App\Enums\NewsStatusEnum::DRAFT) selected @endif>Черновик</option>
                    <option value="{{\App\Enums\NewsStatusEnum::DRAFT}}" @if ($news->status == \App\Enums\NewsStatusEnum::BLOCKED ) selected @endif>Блокировть</option>
                </select>
            </div>

                <br>
            <button type="submit" class="btn btn-success">Сохранить</button>

        </form>

        </div>

    </div>


@endsection
