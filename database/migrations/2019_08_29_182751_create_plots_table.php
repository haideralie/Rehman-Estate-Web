<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('discount_price');
            $table->string('size');
            $table->string('location');
            $table->text('description');
            $table->string('image')->nullable();

    
            $table->unsignedBigInteger('plot_type_id');
            $table->foreign('plot_type_id')->references('id')->on('plot_types')->onDelete('cascade');
        

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
        Schema::dropIfExists('plots');
    }
}
