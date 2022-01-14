<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErpUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp_users_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->default('');
            $table->string('employee_id')->default('');
            $table->string('department_id')->default('');
            $table->string('designation_id')->default('');
            $table->string('office_shift_id')->default('');
            $table->double('basic_salary');
            $table->double('hourly_rate');
            $table->string('salary_type')->default('');
            $table->string('role_description')->default('');
            $table->date('date_of_joining');
            $table->date('date_of_leaving')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('marital_status')->default('');
            $table->string('religion_id')->default('');
            $table->string('blood_group')->nullable();
            $table->string('citizenship_id')->default('');
            $table->string('bio')->nullable();
            $table->string('experience')->nullable();
            $table->string('fb_profile')->nullable();
            $table->string('twitter_profile')->nullable();
            $table->string('gplus_profile')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->string('account_title')->default('');
            $table->string('account_number')->default('');
            $table->string('bank_name')->default('');
            $table->string('iban')->default('');
            $table->string('swift_code')->default('');
            $table->string('bank_branch')->default('');
            $table->string('contact_full_name')->default('');
            $table->string('contact_phone_no')->default('');
            $table->string('contact_email')->default('');
            $table->string('contact_address')->default('');
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
        Schema::dropIfExists('erp_users_details');
    }
}
