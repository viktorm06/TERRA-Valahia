@extends ('layouts.master')

@section ('content')
    <div class="col-sm-9 main_article members_main_article">
        <div class="members-grid">
                <h1 class="hidder1">membrii clubului</h1>
            <div class="members_grid">
                @foreach ($members as $member)
                    <table class="member">
                        <tr>
                            <td class="member_photo_container">
                                <img src="{{ 'img/members/' . $member->id . '.png' }}" alt="" class="member_photo">
                            </td>
                        </tr>
                        <tr>
                            <td class="member_name_container">
                                <span class="member_name">{{$member->name}}</span>
                            </td>
                        </tr>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
@endsection