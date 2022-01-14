<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesheetRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheet_request', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id')->default('');
            $table->string('staff_id')->default('');
            $table->date('request_date');
            $table->string('request_month')->default('');
            $table->time('clock_in');
            $table->time('clock_out');
            $table->string('total_hours')->default('');
            $table->string('request_reason')->default('');
            $table->boolean('is_approved');
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
        Schema::dropIfExists('timesheet_request');
    }
}
