@extends ('admin.layouts.master-admin')

@section ('content')
    <form action="/category/create" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="category"><h1>Добавить категорию:</h1></label>
            <input name="category" type="text" class="form-control" id="category">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Добавить</button>
        </div>
    </form>
@endsection