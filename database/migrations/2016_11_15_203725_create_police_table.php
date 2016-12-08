<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliceTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('police', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type')->nullable();
			$table->string('description')->nullable();
			$table->string('banderazo')->nullable();
			$table->string('cost_kilometer')->nullable();
			$table->string('maneuvers_hour')->nullable();
			$table->string('custody_hour')->nullable();
			$table->string('flag_hour')->nullable();
			$table->string('pension')->nullable();
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
		Schema::drop('police');
	}

}
