@extends ('admin.layouts.master-admin')

@section ('content')
    <form action="/member/create/{{ $member->id }}" method="POST"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="member">Имя:</label>
            <input name="member" type="text" class="form-control" id="member" value="{{ $member->name }}">
        </div>
        <div class="form-group">
            <label for="file">Фото:</label><br>
            <img src="../../../img/members/{{ $member->id }}.png" alt=""><br><br>
            <input name="member_photo" type="file" class="form-control-file" id="file">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary " type="submit">Сохранить</button>
        </div>
    </form>
@endsection