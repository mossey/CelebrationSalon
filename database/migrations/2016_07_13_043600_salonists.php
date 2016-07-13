<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salonists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salonists', function (Blueprint $table) {
            $table->increments('stylistId');
            $table->string('stylistName');
            $table->string('stylistPic');
            $table->string('stylistSpecialization');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('salonists');
    }

}
