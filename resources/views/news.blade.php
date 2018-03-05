@extends ('layouts.master')

@section ('content')
    <div class="col-sm-9 main_article news_main_article">
        @foreach ($posts as $post)
            <div class="item">
                <img src="{{ 'img/post_main/small/' . $post->id . '.png' }}" alt="" class="preview">
                <a href="/news/{{ $post->id }}"><h2 class="item_hidder">{{$post->title}}</h2></a>
                <p class="item_description">{{$post->short_body}}</p>
                <a href="/news/{{ $post->id }}" class="item_more">Mai detaliat...</a>
            </div>
        @endforeach
    </div>
@endsection