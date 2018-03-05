<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/forAdmin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forAdmin/style.css') }}">

    <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    {{--  <link  href="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.4/cropper.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.4/cropper.min.js"></script>  --}}
    <title>Admin Panel</title>
</head>
<body>
    <div class="sidebar">
        <ul class="tv_menu">
            <li>
                <a href="/admin/news/add">Новости</a>
                <ul class="tv_submenu">
                    <li><a href="/admin/news/add">Добавить новость</a></li>
                    <li>
                        <a href="/admin/news/panel">
                            Изменить 
                            <small>Редактировать/<br>Удалить</small>
                        </a>
                    </li>
                    <li><a href="/admin/categories">Категории</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/events/add">Мероприятия</a>
                <ul class="tv_submenu">
                    <li><a href="/admin/events/add">Добавить мероприятие</a></li>
                    <li>
                        <a href="">
                            Изменить
                            <small>Редактировать/<br>Удалить</small>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Галерея</a>
                <ul class="tv_submenu">
                    <li><a href="">Добавить в галерею</a></li>
                    <li>
                        <a href="">
                            Изменить
                            <small>Редактировать/<br>Удалить</small>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/admin/partners">Партнёы</a>
                <ul class="tv_submenu">
                    <li><a href="/admin/partners">Добавить партнёра</a></li>
                    <li>
                        <a href="">
                            Изменить
                            <small>Редактировать/<br>Удалить</small>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Опции</a>
                <ul class="tv_submenu">
                    <li>
                        <a href="">
                            Изменить
                            <small>Редактировать/<br>Удалить</small>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="main">
        @yield ('content')
    </div>
</body>
</html>