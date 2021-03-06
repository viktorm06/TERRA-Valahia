@extends ('admin.layouts.master-admin')

@section ('content')
    <h1>Добавить мероприятие:</h1>
    <form action="/event/create" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название:</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="place">Место:</label>
            <input name="place" type="text" class="form-control" id="place">
        </div>
        <div class="form-group">
            <label for="date">Дата:</label>
            <input name="date" type="text" class="form-control" id="date">
        </div>
        <div class="form-group">
            <label for="time">Время:</label>
            <input name="time" type="text" class="form-control" id="time">
        </div>
        
        <div class="form-group">
            <textarea name="body" id="editor">
                
            </textarea>
        </div>
        <div class="form-group">
            <label for="file">Баннер:</label>
            <input name="banner" type="file" class="form-control-file" id="file">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Опубликовать</button>
        </div>
    </form>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
