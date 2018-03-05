@extends ('admin.layouts.master-admin')

@section ('content')
    <script src="https://use.fontawesome.com/9d56cf9b09.js"></script>
    <form action="/category/create" method="POST">
        {{ csrf_field() }}
        <table cellpadding="20" border="1">
            @foreach ($posts as $post)
                <tr id="{{ $post->id }}">
                    <td align="center" valign="middle"><input type="checkbox"></td>
                    <td><img src="{{ '../../img/post_main/small/' . $post->id . '.png' }}" style="width:80px; height:auto;"></td>
                    <td>{{$post->title}}</td>
                    <td width="400">{{$post->short_body}}</td>
                    <td>{{$post->category}}</td>
                    <td><a href="/admin/news/edit/{{ $post->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="#" onclick="ask_delete({{ $post->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
        </table>
    </form>
    <script>
        function ask_delete(id){
            confirm("Вы действительно хотите удалить данную новость?")?location.href="/admin/news/delete/"+id:false;
        }
    </script>
@endsection