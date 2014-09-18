<?php

class Events extends Eloquent {
    protected $table = 'event';

    protected $fillable = array('name', 'location', 'event_datetime', 'note');

    public static $rules = array(
        'name' => 'required',
        'location' => 'required',
        'event_datetime' => 'required|date_format:Y-m-d h:i:s',
        'note' => 'required'
    );
}

?>