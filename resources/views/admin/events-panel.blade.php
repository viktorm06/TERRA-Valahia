@extends ('admin.layouts.master-admin')

@section ('content')
    <script src="https://use.fontawesome.com/9d56cf9b09.js"></script>
    <table cellpadding="10" cellspacing="0" border="1">
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->body }}</td>
            <td>{{ $event->time }}</td>
            <td>{{ $event->date }}</td>
            <td>{{ $event->place }}</td>
            <td><a href="/admin/events/edit/{{ $event->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><a href="#" onclick="ask_delete({{ $event->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
        @endforeach 
    </table>
    <script>
        function ask_delete(id){
            confirm("Вы действительно хотите удалить данное мероприятие?") ? location.href="/admin/events/delete/" + id : false;
        }
    </script>
@endsection