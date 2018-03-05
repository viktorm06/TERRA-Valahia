<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/forAdmin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forAdmin/signin.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="col-sm-9">
        <form class="form-signin" action="/admin" method="POST">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal">Админ панель:</h1>
            <input name="name" type="text" class="form-control" placeholder="Логин" required autofocus>
            <input name="password" type="password" class="form-control" placeholder="Пароль" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
          </form>
        </body>
    </div>
</body>
</html>