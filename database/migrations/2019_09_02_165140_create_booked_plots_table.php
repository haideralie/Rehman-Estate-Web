<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookedPlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_plots', function (Blueprint $table) {
            $table->bigIncrements('id');
           

            $table->string('name');
            $table->string('email');
            $table->unsignedBigInteger('phone');
            $table->unsignedBigInteger('cnic');
            
            $table->unsignedBigInteger('plot_id');
            $table->foreign('plot_id')->references('id')->on('plots')->onDelete('cascade');
            
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
        Schema::dropIfExists('booked_plots');
    }
}
