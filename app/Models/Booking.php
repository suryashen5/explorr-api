<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    public $primaryKey = 'id';

    protected $fillable = [
        'user_id', 'schedule_code', 'date_transaction', 'payment_status'
    ];
}
