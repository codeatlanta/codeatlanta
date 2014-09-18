@extends('layout')

@section('content')
    <h2 class="text-center">Edit Event</h2>
    <div class="frm">
        {{ Form::model($event, array('method' => 'PATCH', 'route' => array('events.update', $event->id))) }}
            
            @if ($errors->any())
                <ul class="error">
                    {{ implode('', $errors->all('<li>:message</li>')) }}
                </ul>
            @endif
            
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', NULL, array('maxlength' => '255', 'required')) }}
        
            {{ Form::label('location', 'Location') }}
            {{ Form::text('location', NULL, array('maxlength' => '255', 'required')) }}
        
            {{ Form::label('event_datetime', 'Date and Time') }}
            {{ Form::text('event_datetime', NULL, array('type' => 'datetime', 'required')) }} 
        
            {{ Form::label('note', 'Description') }}
            {{ Form::textarea('note', NULL, array('maxlength' => 4095, 'required')) }}
     
            {{ Form::submit('Save Event') }}
     
        {{ Form::close() }}
    </div>

@stop