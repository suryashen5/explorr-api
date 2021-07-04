<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelFacilityList extends Model
{
    protected $table = 'hotel_facility_lists';
    public $primaryKey = 'id';

    protected $fillable = [
        'facility_list_id', 'facility_id'
    ];

    public function facilities()
    {
        return $this->belongsTo(Facility::class, 'facility_id');
    }
}
