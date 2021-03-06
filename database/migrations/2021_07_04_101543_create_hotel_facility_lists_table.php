<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelFacilityListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_facility_lists', function (Blueprint $table) {
            $table->id();
            $table->uuid('facility_list_id');
            $table->unsignedBigInteger('facility_id');

            // Foreign key
            $table->foreign('facility_list_id')->references('facility_list_id')->on('hotels');
            $table->foreign('facility_id')->references('id')->on('facilities');

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
        Schema::dropIfExists('hotel_facility_lists');
    }
}
