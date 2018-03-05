@extends ('layouts.master')

@section ('content')
    <div class="col-sm-9 main_article news_main_article">
        <h1>{{ $post->title }}</h1>
        <img src="{{ asset('img/post_main/big/' . $post->id . '.png') }}" alt="">
        <p>{!! $post->body !!}</p>

        <div id="gallery" style="display:none;">
            @foreach($post->images as $image)
                <img alt="Image 1 Title"  src="{{ asset('img/gallery/small/' .  $image->id  . '.png') }}"
                data-image="{{ asset('img/gallery/big/' .  $image->id  . '.png') }}"
                data-description="Image 1 Description">
            @endforeach
            
       </div>

        @include ('layouts.gallery')
    </div>
@endsection