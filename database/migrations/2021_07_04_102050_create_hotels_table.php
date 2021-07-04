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
            $table->string('description');
            $table->integer('price_per_night');
            $table->string('location');
            $table->unsignedBigInteger('facility_list_id')->foreign('facility_list_id')
            ->reference('facility_list_id')->on('hotel_facility_list');
            $table->unsignedBigInteger('hashtag_list_id')->foreign('hashtag_list_id')
            ->reference('hashtag_list_id')->on('hotel_hashtag_list');
            $table->unsignedBigInteger('category_id')->foreign('category_id')
            ->reference('id')->on('categorys');
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
