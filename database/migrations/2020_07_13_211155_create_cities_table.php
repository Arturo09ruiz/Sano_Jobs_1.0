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
            $table->unsignedBigInteger('country_id')->unsigned();
            $table->unsignedBigInteger('council_id')->unsigned();
            $table->timestamps();



            //Relacion
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('council_id')->references('id')->on('councils');

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
