@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список новостей. (Всего новостей: {{ $count }})</h1>
        <a href="{{ route('admin.news.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить новость</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Статус</th>
                <th>Дата добавления</th>
                <th>Действия</th>
            </tr>
            </thead>
                <tbody>
                @forelse($newsList as $news)
                    <tr>
                        <td>{{$news->id}}</td>
                        <td>{{$news->title}}</td>
                        <td>{{$news->status}}</td>
                        <td>{{$news->created_at ?? now()}}</td>
                        <td>
{{--                            <a href="#">Редактировать</a>--}}
                            <a href="{{ route('admin.news.edit', ['news' => $news->id]) }}">Редактировать</a>
                            <a href="{{ route('admin.news.destroy', ['news' => $news->id]) }}">Удалить</a>
                        </td>
                    </tr>
                @empty
                    <h2>D`OH</h2>>
                @endforelse


                </tbody>
        </table>
        <div>{{ $newsList->links()}}</div>
    </div>

@endsection
