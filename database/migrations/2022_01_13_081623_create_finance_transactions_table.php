<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_id')->default('');
            $table->string('company_id')->default('');
            $table->string('staff_id')->default('');
            $table->date('transaction_date');
            $table->string('transaction_type')->default('');
            $table->string('entity_id')->default('');
            $table->string('entity_type')->default('');
            $table->string('entity_category_id')->default('');
            $table->string('description')->nullable();
            $table->double('amount');
            $table->string('dr_cr')->default('');
            $table->string('payment_method_id')->default('');
            $table->string('reference')->default('');
            $table->string('attachment_file')->default('');
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
        Schema::dropIfExists('finance_transactions');
    }
}
