<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operators', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('phone')->nullable();
			$table->string('number_license')->nullable();
			$table->date('expires_license')->nullable();
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
		Schema::drop('operators');
	}

}
