<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event', function($table)
        {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('location', 255);
            $table->dateTime('event_datetime');
            $table->string('note', 4095);
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event');
	}

}
