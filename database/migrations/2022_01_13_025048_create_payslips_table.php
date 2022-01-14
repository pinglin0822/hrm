<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payslip_key')->default('');
            $table->string('company_id')->default('');
            $table->string('staff_id')->default('');
            $table->double('salary_month');
            $table->string('wages_type')->default('');
            $table->string('payslip_type')->default('');
            $table->double('basic_salary');
            $table->double('daily_wages');
            $table->string('hours_worked')->default('');
            $table->double('total_allowances');
            $table->double('total_commissions');
            $table->double('total_statutory_deductions');
            $table->double('total_other_payments');
            $table->double('net_salary');
            $table->string('payment_method')->default('');
            $table->string('pay_comments')->default('');
            $table->boolean('is_payment');
            $table->string('year_to_date')->default('');
            $table->boolean('is_advance_salary_deduct');
            $table->double('advance_salary_amount');
            $table->boolean('is_loan_deduct');
            $table->double('loan_amount');
            $table->string('status')->default('');
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
        Schema::dropIfExists('payslips');
    }
}
