<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('content');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.你好
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}
