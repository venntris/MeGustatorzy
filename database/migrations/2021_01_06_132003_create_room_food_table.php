<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_food', function (Blueprint $table) {
            $table->biginteger('room_ID')->unsigned();
            $table->foreign('room_ID')->references('id')->on('rooms');
            $table->biginteger('food_ID')->unsigned();
            $table->foreign('food_ID')->references('id')->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_food');
    }
}
