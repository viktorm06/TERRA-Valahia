@extends ('admin.layouts.master-admin')

@section ('content')
    <form enctype="multipart/form-data" action="/partner/create" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="partner"><h1>Добавить партнёра:</h1></label>
            <input name="partner" type="text" class="form-control" id="partner">
        </div>
        <div class="form-group">
            <label for="file">Логотип:</label>
            <input name="logo" type="file" class="form-control-file" id="file">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Добавить</button>
        </div>
    </form>
@endsection