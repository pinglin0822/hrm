<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErpUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_role_id')->default('');
            $table->string('user_type(staff)')->default('');
            $table->string('company_id')->default('');
            $table->string('first_name')->default('');
            $table->string('last_name')->default('');
            $table->string('email')->default('');
            $table->string('username')->default('');
            $table->string('password')->default('');
            $table->string('company_name')->default('');
            $table->string('trading_name')->default('');
            $table->string('registration_no')->default('');
            $table->double('government_tax');
            $table->string('company_type_id')->default('');
            $table->string('profile_photo')->default('')->nullable();
            $table->string('contact_number')->default('');
            $table->string('gender')->default('');
            $table->string('address_1')->default('');
            $table->string('address_2')->default('');
            $table->string('city')->default('');
            $table->string('state')->default('');
            $table->string('zipcode')->default('');
            $table->string('country')->default('');
            $table->date('last_login_date');
            $table->date('last_logout_date');
            $table->string('last_login_ip')->default('');
            $table->boolean('is_logged_in');
            $table->boolean('is_active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('erp_users');
    }
}
