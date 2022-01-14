<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id')->default('');
            $table->string('shift_name')->default('');
            $table->time('monday_in_time');
            $table->time('monday_out_time');
            $table->time('tuesday_in_time');
            $table->time('tuesday_out_time');
            $table->time('wednesday_in_time');
            $table->time('wednesday_out_time');
            $table->time('thursday_in_time');
            $table->time('thursday_out_time');
            $table->time('friday_in_time');
            $table->time('friday_out_time');
            $table->time('saturday_in_time');
            $table->time('saturday_out_time');
            $table->time('sunday_in_time');
            $table->time('sunday_out_time');
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
        Schema::dropIfExists('office_shifts');
    }
}
