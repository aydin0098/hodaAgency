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
        Schema::connection('mysql_metro')->create('lines', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->timestamps();
        });


        Schema::connection('mysql_metro')->create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('line_id');
            $table->foreign('line_id')->references('id')->on('hodaagency_metro.lines')->cascadeOnDelete();
            $table->timestamps();
        });


        Schema::connection('mysql_metro')->create('grids', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Schema::connection('mysql_metro')->create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('vahed')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::connection('mysql_metro')->create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('hodaagency_metro.products')->cascadeOnDelete();
            $table->unsignedBigInteger('grid_id');
            $table->foreign('grid_id')->references('id')->on('hodaagency_metro.girds')->cascadeOnDelete();
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
        Schema::connection('mysql_metro')->dropIfExists('prices');
        Schema::connection('mysql_metro')->dropIfExists('products');
        Schema::connection('mysql_metro')->dropIfExists('grids');
        Schema::connection('mysql_metro')->dropIfExists('stations');
        Schema::connection('mysql_metro')->dropIfExists('lines');
    }
};
