<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 128);
            $table->unsignedBigInteger('councils_id')->unsigned();
            $table->unsignedBigInteger('countries_id')->unsigned();
            $table->timestamps();



            //Relacion
            $table->foreign('councils_id')->references('id')->on('councils');
            $table->foreign('countries_id')->references('id')->on('countries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
