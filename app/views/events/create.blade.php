@extends('layout')

@section('content')
    <h2 class="text-center">Create New Event</h2>
    <div class="frm">
        {{ Form::model($event, array('method' => 'POST', 'route' => 'events.store')) }}
            
            @if ($errors->any())
                <ul class="error">
                    {{ implode('', $errors->all('<li>:message</li>')) }}
                </ul>
            @endif
            
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', NULL, array('maxlength' => '255')) }}
            
            {{ Form::label('location', 'Location') }}
            {{ Form::text('location', NULL, array('maxlength' => '255')) }}
            
            {{ Form::label('event_datetime', 'Date and Time') }}
            {{ Form::text('event_datetime', NULL, array('type' => 'datetime')) }} 
            
            {{ Form::label('note', 'Description') }}
            {{ Form::textarea('note', NULL, array('maxlength' => 4095)) }}
         
            {{ Form::submit('Save Event') }}
         
        {{ Form::close() }}
    </div>
@stop