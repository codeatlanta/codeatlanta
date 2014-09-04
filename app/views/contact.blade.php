@extends('layout')

@section('content')
    <div class="container" id="intro">
	    <div class="row">
		    <div class="col-lg-12">
                <h2 class="text-center">Contact Code Atlanta</h2>
                <div class="frm">
                    <p class="error">{{ $error }}</p>
                    {{ Form::open(array('action' => 'ContactController@postContact')) }}
                        {{ Form::label('name', 'Your Name') }}
                        {{ Form::text('name', $name, array('maxlength' => 127, 'required')) }}

                        {{ Form::label('email', 'Email Address') }}
                        {{ Form::email('email', $email, array('maxlength' => 255, 'required')) }}

                        {{ Form::label('note', 'Message Body') }}
                        {{ Form::textarea('note', $note, array('maxlength' => 2047, 'required')) }}

                        {{ Form::submit('Send Contact Request') }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop