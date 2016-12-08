<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments('id');
			/*Client*/
			$table->string('name_requests');
			$table->integer('phone_requests');
			$table->string('name_wait');
			$table->integer('phone_wait');
			$table->string('email_request');
			/*Vehicle*/
			$table->string('vehicle_type');
			$table->string('brand');
			$table->string('sub_brand');
			$table->string('model');
			$table->string('color');
			$table->string('license_plate');
			$table->string('failure');
			$table->string('load');
			/*Data is vehicle*/
			$table->string('street_is');
			$table->string('number_is');
			$table->string('between_streets');
			$table->string('colony');
			$table->string('municipality');
			$table->string('references');
			$table->string('observations');
			/*Data deliver*/
			$table->string('street_deliver');
			$table->string('number_deliver');
			$table->string('between_streets_deliver');
			$table->string('colony_deliver');
			$table->string('municipality_deliver');
			$table->string('references_deliver');
			$table->string('observations_deliver');
			/*Price calc*/
			$table->string('type');
			$table->string('description');
			$table->string('zone');
			$table->integer('extra_kilometers');
			$table->integer('hours_maneuver');
			$table->integer('hours_wait');
			$table->enum('use_dolly', ['si','no']);
			$table->string('base_price');
			$table->string('kilometer_extra_price');
			$table->string('maneuver_price');
			$table->string('wait_price');
			$table->string('dolly_price');
			$table->string('payment_method');
			$table->string('payment_received');
			/*Assigment*/
			$table->string('cabinero_took_service');
			$table->string('unit_assigned');
			$table->string('operator_assigned');
			/*Times*/
			$table->date('time_request');
			$table->date('time_promise');
			$table->date('real_time');
			$table->date('end_time');
			$table->string('estatus');
			$table->string('compliment');
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
		Schema::drop('services');
	}

}
