@extends ('admin.layouts.master-admin')

@section ('content')
    <script src="https://use.fontawesome.com/9d56cf9b09.js"></script>
    <table cellpadding="10" cellspacing="0" border="1">
        @foreach ($members as $member)
        <tr>
            <td style="padding: 0;"><img src="{{ '../../img/members/' . $member->id . '.png' }}" alt=""></td>
            <td>{{ $member->name }}</td>
            <td><a href="/admin/members/edit/{{ $member->id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><a href="#" onclick="ask_delete({{ $member->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
        @endforeach 
    </table>
    <script>
        function ask_delete(id){
            confirm("Удалить члена клуба?") ? location.href="/admin/members/delete/" + id : false;
        }
    </script>
@endsection