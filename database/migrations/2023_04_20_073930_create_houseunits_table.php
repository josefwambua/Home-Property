<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houseunits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->integer('size');
            $table->decimal('rent', 8, 2);
            $table->decimal('deposit', 8, 2);
            $table->enum('status', ['vacant', 'occupied'])->default('vacant');
            $table->timestamps();

            
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houseunits');
    }
}
