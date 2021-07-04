<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreign('hotel_id')
            ->references('id')->on('hotels')
            ->onDelete('cascade');
            $table->foreign('schedule_code')
            ->references('schedule_code')->on('schedules')
            ->onDelete('cascade');
            $table->dateTime('date_started');
            $table->dateTime('date_ended');
            $table->boolean('status_stayed');
            $table->foreign('room_id')
            ->references('id')->on('rooms')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
