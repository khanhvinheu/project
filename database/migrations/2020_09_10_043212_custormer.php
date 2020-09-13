<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Custormer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Custormer', function (Blueprint $table) {
            $table->bigIncrements('CustormerID');
            $table->bigInteger('AccountID')->unsigned()->unique();;
            $table->foreign('AccountID')->references('AccountID')->on('Account')->onDelete('cascade');             
            $table->string('tenCongty');
            $table->string('diaChi'); 
            $table->string('website');
            $table->string('tinTrang');
            $table->datetime('ngayTao');
            $table->datetime('ngayMuahang');          
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
        Schema::dropIfExists('Custormer');
    }
}
