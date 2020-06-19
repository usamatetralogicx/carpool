<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('date_of_birth');
            $table->string('Gender');
            $table->string('password');
            $table->string('verifyToken')->nullable();
            $table->integer('status')->default(0);
            $table->integer('block')->default(1);
            $table->string('Country');
            $table->string('Image');
            $table->string('Type')->default('user');
            $table->string('closed_account')->default('No');
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
        Schema::dropIfExists('users');
    }
}
