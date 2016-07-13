<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Styling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styling', function (Blueprint $table) {
            $table->increments('stylingID');
            $table->string('stylingName');
            $table->string('stylingPic');
            $table->string('stylingCost');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('styling');
    }

}
