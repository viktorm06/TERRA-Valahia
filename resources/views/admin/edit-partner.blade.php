@extends ('admin.layouts.master-admin')

@section ('content')
    <form action="/partner/create/{{ $partner->id }}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <h1>Редактировать партнёра:</h1>
        <div class="form-group">
            <label for="partner">Название:</label>
            <input name="partner" type="text" class="form-control" id="partner" value="{{ $partner->name }}">
        </div>
        <div class="form-group">
            <label for="file">Логотип:</label><br>
            <img src="../../../img/parteneri/{{ $partner->id }}.png" alt=""><br><br>
            <input name="logo" type="file" class="form-control-file" id="file">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Сохранить</button>
        </div>
    </form>
@endsection