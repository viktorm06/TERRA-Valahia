@extends ('admin.layouts.master-admin')

@section ('content')
    <form enctype="multipart/form-data" action="/partner/create" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="partner"><h1>Добавить партнёра:</h1></label>
            <input name="partner" type="text" class="form-control" id="partner" required
        </div>
        <div class="form-group">
            <label for="file">Логотип:</label>
            <input name="logo" type="file" class="form-control-file" id="file" required>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Добавить</button>
        </div>
    </form>

    <br> <hr>
    <h2>Изменить уже существующих:</h2>
    <br>
    <table cellpadding="20" border="1">
        @foreach ($partners as $partner)
            <tr>
                <td style="padding: 0;"><img src="{{ '../../img/parteneri/' . $partner->id . '.png' }}" alt=""></td>
                <td>{{ $partner->name }}</td>
                <td><a href="/admin/partners/edit/{{ $partner->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <td><a href="#" onclick="ask_delete({{ $partner->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
        @endforeach
    </table>
    <script>
        function ask_delete(id){
            confirm("Вы действительно хотите удалить данную категорию?") ? location.href="/admin/partners/delete/" + id : false;
        }
    </script>
    <script src="https://use.fontawesome.com/9d56cf9b09.js"></script>
@endsection