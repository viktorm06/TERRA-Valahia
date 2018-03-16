@extends ('layouts.master')

@section ('content')
    <script type='text/javascript' src="{{ asset('unitegallery/js/unitegallery.min.js') }}"></script> 

    <script type='text/javascript' src="{{ asset('unitegallery/themes/tiles/ug-theme-tiles.js') }}"></script> 
    <script type='text/javascript' src="{{ asset('unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script> 

    <div class="col-sm-9 main_article show_news_main_article">
        <h1 class="hidder1">{{ $mini_post->title }}</h1>
        {{--  <img style="
            width: 30%;
            height: auto;
        " src="{{ asset('img/post_main/big/' . $post->id . '.png') }}" alt="">  --}}
        <br>
        <span class="show_news_body">{!! $post->body !!}</span>
        <br><br>

        @if(!$post->images->isEmpty())
            <h2 class="hidder2">Галлерея</h2>
            <div id="gallery" style="display:none;">
                @foreach($post->images as $image)
                    <img alt="Image 1 Title"  src="{{ asset('img/gallery/small/' .  $image->id  . '.png') }}"
                    data-image="{{ asset('img/gallery/big/' .  $image->id  . '.png') }}"
                    data-description="Image 1 Description">
                @endforeach
            </div>  
        @endif
        
        <br>
        @if(!$post->videos->isEmpty())
            <h2 class="hidder2">Видео</h2>
            <br>
            <div class="video-responsive">
                {!! $post->videos[0]->video_src !!}
            </div>
        @endif
        
        @include ('layouts.gallery')
    </div>
@endsection