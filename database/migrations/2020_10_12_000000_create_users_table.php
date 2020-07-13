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
            $table->string('name');
            $table->string('ncm')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('city_id')->unsigned()->nullable();
            $table->unsignedBigInteger('conuncil_id')->unsigned()->nullable();
            $table->unsignedBigInteger('country_id')->unsigned()->nullable();
            $table->unsignedBigInteger('role_id')->unsigned()->nullable();
            $table->unsignedBigInteger('team_id')->unsigned()->nullable();
            $table->timestamps();


            //Relaciones
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('conuncil_id')->references('id')->on('councils');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('team_id')->references('id')->on('teams');

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
