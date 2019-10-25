@foreach($events as $event)
    Name: {{ $event->name }} - Description: {{ $event->description }} - Start: {{ $event->start }}- End: {{ $event->end }}<br>
@endforeach
