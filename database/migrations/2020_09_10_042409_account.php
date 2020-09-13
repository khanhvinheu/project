<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Account', function (Blueprint $table) {
            $table->bigIncrements('AccountID');
            $table->bigInteger('PartnerID')->unsigned()->unique();;
            $table->foreign('PartnerID')->references('PartnerID')->on('Partner')->onDelete('cascade');  
            $table->string('tenNhanvien')->nullable();
            $table->string('chucVu')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();   
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
        Schema::dropIfExists('Account');
    }
}
