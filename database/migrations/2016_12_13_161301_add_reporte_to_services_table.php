<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReporteToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('service_type');
            $table->string('report_number');
            $table->string('patrol');
            // Machine
            $table->string('machine_type');
            $table->float('weight');
            $table->string('measure');
            $table->boolean('wheel');
            $table->boolean('platform_move');
            $table->boolean('machine_works');
            $table->string('obstructs');
            $table->string('height');
            $table->string('banderazo');
            $table->string('custody');
            $table->float('hours_custody');
            $table->float('custody_price');
            $table->string('abanderamiento');
            $table->float('abanderamiento_hours');
            $table->float('abanderamiento_price');
            $table->datetime('back_home');
            $table->float('sub_total');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
}
