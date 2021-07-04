<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    public $primaryKey = 'id';

    protected $fillable = [
        'hotel_id', 'schedule_code', 'date_started', 'date_ended', 'status_stayed', 'room_id'
    ];
}
