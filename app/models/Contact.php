<?php

class Contact extends Eloquent {
    protected $table = 'contact';

    protected $fillable = array('name', 'email', 'note', 'contacted');
}

?>