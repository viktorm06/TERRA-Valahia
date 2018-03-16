@extends ('admin.layouts.master-admin')

@section ('content')
    <h1>Добавить новость:</h1>
    <form action="/post/create" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <h3>Выберите категорию:</h3>
            <select class="custom-select" name="category">
                @foreach (\App\Category::all() as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Заголовок:</label>
            <input name="title" type="text" class="form-control" id="title" required>
        </div>
        <div class="form-group">
            <textarea name="short_body" class="form-control short_desc" required></textarea>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="body" id="editor" required>
                {{--  Тут будет текст из редактора  --}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="file">Главное фото:</label>
            <input name="main-photo" type="file" class="form-control-file" id="file" required>
        </div>
        <div class="form-group">
            <label for="file">Дополнительные фото(гелерея):</label>
            <input name="galery[]" type="file" class="form-control-file" id="file" multiple>
        </div>
        <div class="form-group">
            <label for="video">Код видео с youtube:</label>
            <input name="video" type="text" class="form-control" id="video">
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
