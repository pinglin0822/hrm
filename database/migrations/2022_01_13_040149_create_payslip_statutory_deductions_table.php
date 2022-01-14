<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayslipStatutoryDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslip_statutory_deductions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payslip_id')->default('');
            $table->string('staff_id')->default('');
            $table->boolean('is_fixed');
            $table->string('pay_title')->default('');
            $table->double('pay_amount');
            $table->double('salary_month');
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
        Schema::dropIfExists('payslip_statutory_deductions');
    }
}
