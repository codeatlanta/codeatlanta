@extends('layout')

@section('content')

    <h2>Upcoming events</h2>
    <div>
        @foreach($events as $event)
            <div>
                <h3>{{{ $event->name }}}</h3>
                <p>{{{ $event->location }}} @ {{{ $event->event_datetime }}}</p>
            </div>
        @endforeach
    </div>
    
@stop