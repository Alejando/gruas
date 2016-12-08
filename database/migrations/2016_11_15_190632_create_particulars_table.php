<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticularsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('particulars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('alias')->nullable();
			$table->string('type')->nullable();
			$table->string('z1')->nullable();
			$table->string('z2')->nullable();
			$table->string('z3')->nullable();
			$table->string('z4')->nullable();
			$table->string('z5')->nullable();
			$table->string('cost_kilometer')->nullable();
			$table->string('maneuvers')->nullable();
			$table->string('wait_hour')->nullable();
			$table->string('dolly_use')->nullable();
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
		Schema::drop('particulars');
	}

}
