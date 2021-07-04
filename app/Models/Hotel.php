<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    public $primaryKey = 'id';

    protected $fillable = [
        'name', 'address', 'description', 'price_per_night', 'location', 'facility_list_id', 'hashtag_list_id', 'category_id'
    ]
}
