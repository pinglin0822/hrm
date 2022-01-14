<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErpConstantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp_constants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_id')->default('');
            $table->string('type')->default('');
            $table->string('category_name')->default('');
            $table->string('field_one')->default('');
            $table->string('field_two')->default('');
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
        Schema::dropIfExists('erp_constants');
    }
}
