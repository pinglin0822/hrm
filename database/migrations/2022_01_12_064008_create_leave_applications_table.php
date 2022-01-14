<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id')->default('');
            $table->string('employee_id')->default('');
            $table->string('leave_type_id')->default('');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('reason')->default('');
            $table->string('remarks')->nullable();
            $table->string('status')->default('');
            $table->boolean('is_half_day');
            $table->string('leave_attachment')->nullable();
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
        Schema::dropIfExists('leave_applications');
    }
}
