<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerName');
            $table->string('styling');
            $table->integer('stylingID');
            $table->integer('stylistID');
            $table->string('stylistName');

            $table->timestamps();
            $table->dateTime('appointmentTime');
            $table->timestamps('bookingTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookings');
    }
}
