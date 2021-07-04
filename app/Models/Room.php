<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    public $primaryKey = 'id';

    protected $fillable = [
        'hotel_id', 'name', 'price', 'slot', 'pax', 'bed'
    ];
}
