@extends("layouts.admin")
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Добавить новость</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <form>
            <input type="text" placeholder="Заголовок">
            <input type="text" placeholder="Автор">
            <input type="submit" value="Создать">
        </form>
    </div>

@endsection
