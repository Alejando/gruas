<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovilitiesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movilities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type')->nullable();
			$table->string('description')->nullable();
			$table->string('local_service')->nullable();
			$table->string('single_return')->nullable();
			$table->string('dolly_use')->nullable();
			$table->string('wait_hour')->nullable();
			$table->string('maneuvers_hour')->nullable();
			$table->string('tlajomulco_to_GDL')->nullable();
			$table->string('cost_kilometer')->nullable();
			$table->string('deposit_outside_GDL')->nullable();
			$table->string('conditioning_hour')->nullable();
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
		Schema::drop('movilities');
	}

}
