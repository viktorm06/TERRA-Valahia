@extends ('admin.layouts.master-admin')

@section ('content')
    <form enctype="multipart/form-data" action="/member/create" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="member"><h1>Имя:</h1></label>
            <input name="member" type="text" class="form-control" id="member">
        </div>
        <div class="form-group">
            <label for="file"><h1>Фото:</h1></label>
            <input name="member_photo" type="file" class="form-control-file" id="file">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Добавить</button>
        </div>
    </form>
@endsection