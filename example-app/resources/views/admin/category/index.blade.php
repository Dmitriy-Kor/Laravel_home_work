@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список категории</h1>
        <a href="{{ route('admin.categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить категорию</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Наименование</th>
                <th>Дата добавления</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{ $category->created_at ?? now()}}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">Редактировать</a>
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
