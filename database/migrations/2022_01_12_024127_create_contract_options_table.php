<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->default('');
            $table->string('salary_type')->default('');
            $table->string('contract_tax_option')->default('');
            $table->boolean('is_fixed');
            $table->string('option_title')->default('');
            $table->double('contract_amount');
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
        Schema::dropIfExists('contract_options');
    }
}
