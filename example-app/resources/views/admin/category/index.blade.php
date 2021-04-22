@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список категории. (Всего категорий: {{ $count }})</h1>
        <a href="{{ route('admin.categories.create') }}"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить категорию</a>
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
                <th>Наименование</th>
                <th>Описание</th>
                <th>Статус</th>
                <th>Дата добавления</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    @if($category->is_visible == 1)
                        <td><i class="fas fa-eye"></i></td>
                    @else
                        <td><i class="fas fa-eye-slash"></i></td>
                    @endif
                    <td>{{ $category->created_at ?? now()}}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', ['category' => $category]) }}">Редактировать</a>
                        <a href="javascript:;" class="delete" rel="{{$category->id}}">Уд.</a>
                    </td>
                </tr>
            @empty
                <h2>Категорий нет</h2>>
            @endforelse


            </tbody>
        </table>
        <div>{{ $categories->links()}}</div>
    </div>

@endsection
@push('js')
    <script>
        $(function() {
            $(".delete").on('click', function() {
                let id = $(this).attr('rel');
                if (confirm("Подтверждаете?")) {
                    $.ajax({
                        method: "delete",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Content-Type': 'application/json',
                        },
                        url: "/admin/categories/" + id,
                        complete: function (response) {
                            alert("Запись с ID" + id + " удалена");
                        }
                    });
                }
            });
        });
    </script>
@endpush

