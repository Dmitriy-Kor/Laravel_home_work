@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Редактирование новости</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form>
            <p></p>
            <input type="text" placeholder="Заголовок">
            <input type="text" placeholder="Автор">
            <input type="submit" value="Изменить">
        </form>
    </div>

@endsection
