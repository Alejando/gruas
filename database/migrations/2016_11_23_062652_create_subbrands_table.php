<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubbrandsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subbrands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_sub_brand')->nullable();
			$table->integer('brand_id')->unsigned()->foreign('brand_id')->references('id')->on('brands');
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
		Schema::drop('subbrands');
	}

}
