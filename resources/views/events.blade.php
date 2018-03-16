@extends ('layouts.master')

@section ('content')
    <div class="col-sm-9 main_article events_main_article">
        <?php $counter = 0 ?>
        @foreach ($events as $event)
            @if ($counter == 0)
                <table class="event">
                    <tr>
                        <td class="time-and-date" rowspan="2">
                            <span class="date">{{ $event->date }}</span><br>
                            <span class="time">{{ $event->time }}</span>
                        </td>
                        <td class="description">
                            <div class="description_name_wrapper">
                                <h2>{{ $event->title }}</h2>
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="destination">
                            <span class="place">{{ $event->place }}</span>
                        </td>
                    </tr>
                </table>
                <?php $counter = 1 ?>
            @else
                <table class="event">
                    <tr>
                        <td class="description">
                            <div class="description_name_wrapper">
                                <h2>{{ $event->title }}</h2>
                            </div>
                        </td>
                        <td class="time-and-date" rowspan="2">
                            <span class="date">{{ $event->date }}</span><br>
                            <span class="time">{{ $event->time }}</span>
                        </td>                      
                    </tr>
                    <tr>
                        <td class="destination">
                            <span class="place">{{ $event->place }}</span>
                        </td>
                    </tr>
                </table>
                <?php $counter = 0 ?>
            @endif
        @endforeach
    </div>
@endsection