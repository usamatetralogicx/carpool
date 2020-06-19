<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfileInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('profile_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('Email');
            $table->string('Mobile_phone');
            $table->string('Date_of_birth');
            $table->string('Bio');
            $table->rememberToken();
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
        //
    }
}
