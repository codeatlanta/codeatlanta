<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('contact', function($table)
        {
            $table->bigIncrements('id');
            $table->string('name', 127);
            $table->string('email', 255);
            $table->string('note', 2047);
            $table->dateTime('contacted')->nullable();
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
        Schema::drop('contact');
    }
}
