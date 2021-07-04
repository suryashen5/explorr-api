<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelHashtagListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_hashtag_lists', function (Blueprint $table) {
            $table->id();
            $table->uuid('hashtag_list_id');
            $table->unsignedBigInteger('hashtag_id');

            // Foreign Key
            $table->foreign('hashtag_list_id')->references('hashtag_list_id')->on('hotels');
            $table->foreign('hashtag_id')->references('id')->on('hashtags');

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
        Schema::dropIfExists('hotel_hashtag_lists');
    }
}
