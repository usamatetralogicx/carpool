<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_cars', function (Blueprint $table) {
                $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('driver_id');
            $table->string('Departure');
            $table->string('Arrival');
            $table->string('Fare');
            $table->string('is_confirm')->default('No');
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
        Schema::dropIfExists('buy_cars');
    }
}
