<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrapPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrap_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('standard_blockage')->nullable();
            $table->string('basic_price')->nullable();
            $table->string('price_from_to')->nullable();
            $table->string('price_above')->nullable();
            $table->string('by_wholesale')->nullable();
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
        Schema::dropIfExists('scrap_prices');
    }
}
