<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistancesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assistances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('alias')->nullable();
			$table->string('type')->nullable();
			$table->string('inside_of_periferico')->nullable();
			$table->string('cost_kilometer')->nullable();
			$table->string('maneuvers')->nullable();
			$table->string('wait_hour')->nullable();
			$table->string('dolly_use')->nullable();
			$table->string('flag')->nullable();
			$table->string('pension')->nullable();
			$table->string('conditioning')->nullable();
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
		Schema::drop('assistances');
	}

}
