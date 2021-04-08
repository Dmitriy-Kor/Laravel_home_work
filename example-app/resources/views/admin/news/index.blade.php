@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список новостей</h1>
        <a href="{{ route('admin.news.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить новость</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Дата добавления</th>
                <th>Действия</th>
            </tr>
            </thead>
                <tbody>
                @forelse($newsList as $key => $news)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$news}}</td>
                        <td>{{now()}}</td>
                        <td>
{{--                            <a href="#">Редактировать</a>--}}
                            <a href="{{ route('admin.news.edit', ['news' => $key]) }}">Редактировать</a>
                            <a href="#">Удалить</a>
                        </td>
                    </tr>
                @empty
                    <h2>D`OH</h2>>
                @endforelse


                </tbody>
        </table>
    </div>

@endsection
