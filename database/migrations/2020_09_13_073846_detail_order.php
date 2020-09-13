<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailsOrder', function (Blueprint $table) {
            $table->bigIncrements('DetailsOrderID');
            $table->bigInteger('OrderID')->unsigned()->unique();;
            $table->foreign('OrderID')->references('OrderID')->on('Order')->onDelete('cascade');
            $table->bigInteger('ProductID')->unsigned()->unique();;
            $table->foreign('ProductID')->references('ProductID')->on('Product')->onDelete('cascade');    
            $table->bigInteger('soLuong')->nullable();
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
        Schema::dropIfExists('detailsOrder');
    }
}
