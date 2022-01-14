<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErpSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('application_name')->default('');
            $table->string('company_name')->default('');
            $table->string('trading_name')->default('');
            $table->string('registration_no')->default('');
            $table->double('government_tax');
            $table->string('company_type_id')->default('');
            $table->string('email')->default('');
            $table->string('contact_number')->default('');
            $table->string('country')->default('');
            $table->string('address_1')->default('');
            $table->string('address_2')->default('');
            $table->string('city')->default('');
            $table->string('zipcode')->default('');
            $table->string('state')->default('');
            $table->string('default_currency')->default('');
            $table->boolean('is_ssl_available');
            $table->string('currency_converter')->default('');
            $table->string('notification_position')->default('');
            $table->string('notification_close_btn')->default('');
            $table->string('notification_bar')->default('');
            $table->string('date_format_xi')->default('');
            $table->string('enable_email_notification')->default('');
            $table->string('email_type')->default('');
            $table->string('logo')->default('');
            $table->string('favicon')->default('');
            $table->string('frontend_logo')->default('');
            $table->string('other_logo')->default('');
            $table->string('animation_effect')->default('');
            $table->string('animation_effect_modal')->default('');
            $table->string('animation_effect_topmenu')->default('');
            $table->string('default_language')->default('');
            $table->string('system_timezone')->default('');
            $table->string('paypal_email')->default('');
            $table->string('paypal_sandbox')->default('');
            $table->string('paypal_active')->default('');
            $table->string('stripe_secret_key')->default('');
            $table->string('stripe_publishable_key')->default('');
            $table->string('stripe_active')->default('');
            $table->string('online_payment_account')->default('');
            $table->string('invoice_terms_condition')->default('');
            $table->string('auth_background')->default('');
            $table->string('hr_version')->default('');
            $table->date('hr_release_date');
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
        Schema::dropIfExists('erp_settings');
    }
}
