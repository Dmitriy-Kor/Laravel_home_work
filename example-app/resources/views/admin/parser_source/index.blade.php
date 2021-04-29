@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Список ресурсов. (Всего ресурсов: {{$count}})</h1>
        <a href="{{ route('admin.resources.create')}}"
           class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить ресурс</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Адрес</th>
                <th>Описание</th>
                <th>Статус</th>
            </tr>

            </thead>
            <tbody>
            @forelse($resources as $res)
                <tr>
                    <td>{{$res->id}}</td>
                    <td>{{$res->url}}</td>
                    <td>{{$res->description}}</td>
                    @if($res->is_visible == 1)
                        <td><i class="fas fa-eye"></i></td>
                    @else
                        <td><i class="fas fa-eye-slash"></i></td>
                    @endif
                    <td>
                        <a href="#">Редактировать</a>
                        <a href=#">Удалить</a>
                    </td>
                </tr>
            @empty
                <h2>Ресурсов нет</h2>>
            @endforelse
            </tbody>
        </table>
        <div>{{$resources->links()}}</div>
    </div>

@endsection


