<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_rides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Departure');
            $table->string('Arrival');
            $table->string('Departure_date');
            $table->string('Departure_time');
            $table->string('Arrival_date');
            $table->string('Arrival_time');
            $table->string('Fare');
            $table->string('Car_type');
            $table->string('Seats');
            $table->string('km');
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
        Schema::dropIfExists('offer_rides');
    }
}
