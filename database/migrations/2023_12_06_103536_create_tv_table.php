<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql_tv')->create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

//        Schema::connection('mysql_tv')->create('networks', function (Blueprint $table) {
//            $table->id();
//            $table->string('title');
//            $table->string('image')->nullable();
//            $table->unsignedBigInteger('category_id')->nullable();
//            $table->foreign('category_id')->references('id')->on('hodaagency_tv.categories');
//            $table->string('totalPrice')->nullable();
//            $table->timestamps();
//        });
//
//        Schema::connection('mysql_tv')->create('prices', function (Blueprint $table) {
//            $table->id();
//            $table->string('title');
//            $table->string('price');
//            $table->unsignedBigInteger('category_id');
//            $table->foreign('category_id')->references('id')->on('hodaagency_tv.categories');
//            $table->unsignedBigInteger('net_id');
//            $table->foreign('net_id')->references('id')->on('hodaagency_tv.networks');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tv');
    }
};
