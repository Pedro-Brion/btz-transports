<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefuelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refuels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehicle_id');
            $table->unsignedInteger('driver_id');
            $table->date('date');
            $table->string('type_fuel');
            $table->tinyInteger('refuel_amount');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');

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
        Schema::dropIfExists('refuels');
    }
}
