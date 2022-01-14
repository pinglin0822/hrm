<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number')->default('');
            $table->string('company_id')->default('');
            $table->string('client_id')->default('');
            $table->string('project_id')->default('');
            $table->string('invoice_month')->default('');
            $table->date('invoice_date');
            $table->date('invoice_due_date');
            $table->double('sub_total_amount');
            $table->string('discount_type')->default('');
            $table->string('discount_figure')->default('');
            $table->double('total_tax');
            $table->string('tax_type')->default('');
            $table->double('total_discount');
            $table->double('grand_total');
            $table->string('invoice_note')->default('');
            $table->string('status')->default('');
            $table->string('payment_method')->default('');
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
        Schema::dropIfExists('invoices');
    }
}
