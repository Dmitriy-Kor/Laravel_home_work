@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Добавить ресурс</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-8">
            <form method="post" action="{{route('admin.resources.store')}}">
                @csrf
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="form-group">
                    @if($errors->has('url'))
                        @foreach($errors->get('url') as $error)
                            <label for="url">{{ $error }}</label>
                        @endforeach
                    @else
                        <label for="url">Адрес нового ресурса</label>
                    @endif
                    <input type="text" id="url" name="url" @error('url') style="border: red 1px solid;" @enderror placeholder="Адрес ресурса" class="form-control" value="{{old('url')}}">

                </div>
                <div class="form-group">
                    @if($errors->has('description'))
                        @foreach($errors->get('description') as $error)
                            <label for="description">{{ $error }}</label>
                        @endforeach
                    @else
                        <label for="description">Описание нового ресурса</label>
                    @endif

                    <textarea type="text" id="description" name="description" @error('description') style="border: red 1px solid;" @enderror placeholder="Описание ресурса" class="form-control" >{!! old('description') !!}</textarea>
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
