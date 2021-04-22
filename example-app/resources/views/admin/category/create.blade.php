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
                    @if($errors->has('title'))
                        @foreach($errors->get('title') as $error)
                            <label for="title">{{ $error }}</label>
                        @endforeach
                    @else
                        <label for="title">Наименование новой категории</label>
                    @endif
                    <input type="text" id="title" name="title" @error('title') style="border: red 1px solid;" @enderror placeholder="Наименование" class="form-control" value="{{old('title')}}">

                </div>
                <div class="form-group">
                    @if($errors->has('description'))
                        @foreach($errors->get('description') as $error)
                            <label for="description">{{ $error }}</label>
                        @endforeach
                    @else
                        <label for="description">Описание новой категории</label>
                    @endif

                    <textarea type="text" id="description" name="description" @error('description') style="border: red 1px solid;" @enderror placeholder="Описание" class="form-control" >{!! old('description') !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="is_visible">Отобразить</label>
                    <input type="checkbox" id="is_visible" name="is_visible" value="1" @if (boolval(old('is_visible')) === true) checked @endif">
                </div>


                <br>
                <button type="submit" class="btn btn-success">Создать</button>
            </form>
        </div>
    </div>

@endsection
