<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 128);
            $table->text('description');
            $table->text('requirements');
            $table->string('business', 128);
            $table->string('email', 128);
            $table->string('telefono', 128);
            $table->date('deadline');
            $table->enum('status', ['PUBLISHED', 'DEAD'])->default('PUBLISHED');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('city_id')->unsigned();
            $table->unsignedBigInteger('conuncil_id')->unsigned();
            $table->unsignedBigInteger('country_id')->unsigned();
            $table->unsignedBigInteger('team_id')->unsigned();
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->timestamps();



            //RELACIONES

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('conuncil_id')->references('id')->on('councils');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('category_id')->references('id')->on('categories');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacants');
    }
}
