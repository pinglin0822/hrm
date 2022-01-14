<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id')->default('');
            $table->string('employee_id')->default('');
            $table->date('attendance_date');
            $table->time('clock_in');
            $table->string('clock_in_ip_address')->default('');
            $table->time('clock_out');
            $table->string('clock_out_ip_address')->default('');
            $table->string('clock_in_out')->default('');
            $table->double('clock_in_latitude');
            $table->double('clock_in_longitude');
            $table->double('clock_out_latitude');
            $table->double('clock_out_longitude');
            $table->string('time_late')->default('');
            $table->string('early_leaving')->default('');
            $table->string('overtime')->default('');
            $table->string('total_work')->default('');
            $table->string('total_rest')->default('');
            $table->string('attendance_status')->default('');
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
        Schema::dropIfExists('timesheet');
    }
}
