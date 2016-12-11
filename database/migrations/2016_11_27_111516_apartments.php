<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cities_id')->unsigned();
            $table->integer('price');
            $table->integer('room_numbers');
            $table->integer('metric_area');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('apartments', function (Blueprint $table) {
            $table->foreign('cities_id')
                ->references('id')
                ->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apartments');
    }
}
