<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockPricebandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_priceband', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stocks');

            $table->unsignedInteger('priceband_id');
            $table->foreign('priceband_id')->references('id')->on('pricebands');

            $table->decimal('price');

            $table->unsignedInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');

            $table->unsignedInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');

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
        Schema::dropIfExists('stock_priceband');
    }
}
