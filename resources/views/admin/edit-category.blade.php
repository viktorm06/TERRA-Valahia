@extends ('admin.layouts.master-admin')

@section ('content')
    <form action="/category/create/{{ $category->id }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="category"><h1>Редактировать категорию:</h1></label>
            <input name="category" type="text" class="form-control" id="category" value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Сохранить</button>
        </div>
    </form>
@endsection