<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->text('description');
            $table->integer('price_per_night');
            $table->string('location');
            $table->unsignedBigInteger('facility_list_id');
            $table->unsignedBigInteger('hashtag_list_id');
            $table->unsignedBigInteger('category_id');

            // Foreign key
            $table->foreign('facility_list_id')->references('facility_list_id')->on('hotel_facility_lists');
            $table->foreign('hashtag_list_id')->references('hashtag_list_id')->on('hotel_hashtag_lists');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('hotels');
    }
}
