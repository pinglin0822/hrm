<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('assets_category_id')->default('');
            $table->string('brand_id')->default('');
            $table->string('company_id')->default('');
            $table->string('employee_id')->default('');
            $table->string('company_asset_code')->default('');
            $table->string('name')->default('');
            $table->date('purchase_date');
            $table->string('invoice_number')->default('');
            $table->string('manufacturer')->default('');
            $table->string('serial_number')->default('');
            $table->date('warranty_end_date');
            $table->string('asset_note')->default('');
            $table->string('asset_image')->default('');
            $table->boolean('is_working');
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
        Schema::dropIfExists('assets');
    }
}
