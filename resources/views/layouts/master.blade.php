<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TerraValahia</title>
        <link rel="shortcut icon" href="img/static/icon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/media.css') }}">
        {{-- тут нужно разобраться, как подключить только для show --}}
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
        <script type='text/javascript' src="{{ asset('unitegallery/js/unitegallery.min.js') }}"></script> 
		
		<link rel='stylesheet' href="{{ asset('unitegallery/css/unite-gallery.css') }}" type='text/css' /> 
        <script type='text/javascript' src="{{ asset('unitegallery/themes/tiles/ug-theme-tiles.js') }}"></script> 
        <script type='text/javascript' src="{{ asset('unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script> 
        {{-- вот этот фрагмент --}}
        <script src="https://use.fontawesome.com/9d56cf9b09.js"></script>
    </head>
    <body>
        <header>
            <img src="{{ asset('img/static/header_bcg.png') }}" alt="" class="header_bcg">
            <img src="{{ asset('img/static/logo.png') }}" alt="logo" class="logo">
            
            @include ('layouts.nav')
            
        </header>

        <article class="container container_wrapper">
            <div class="row">
                
                @yield ('content')

                @include ('layouts.sidebar')

            </div>
        </article>

        @include ('layouts.footer')
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>