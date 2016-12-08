<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('units', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type')->nullable();
			$table->string('description')->nullbale();
			$table->string('brand')->nullable();
			$table->string('sub_brand')->nullable();
			$table->string('model')->nullable();
			$table->string('expiration_date')->nullable();
			$table->string('license_plate')->nullable();
			$table->integer('economic_number');
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
		Schema::drop('units');
	}

}
