@extends ('admin.layouts.master-admin')

@section ('content')
    <script src="https://use.fontawesome.com/9d56cf9b09.js"></script>
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
    <hr>
    <h2>Редактировать уже существующие:</h2>
    <table cellpadding="20" border="1">
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td><a href="/admin/categories/edit/{{ $category->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <td><a href="#" onclick="ask_delete({{ $category->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
        @endforeach
    </table>
    <script>
        function ask_delete(id){
            confirm("Вы действительно хотите удалить данную категорию?") ? location.href="/admin/categories/delete/" + id : false;
        }
    </script>
@endsection