<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id')->default('');
            $table->string('account_name')->default('');
            $table->double('account_balance');
            $table->double('account_opening_balance');
            $table->double('account_number');
            $table->string('branch_code')->default('');
            $table->string('bank_branch')->default('');
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
        Schema::dropIfExists('finance_accounts');
    }
}
