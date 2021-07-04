<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelHashtagList extends Model
{
    protected $table = 'hotel_hashtag_lists';
    public $primaryKey = 'id';

    protected $fillable = [
        'hashtag_list_id', 'hashtag_id'
    ];

    public function hashtags()
    {
        return $this->belongsTo(Hashtag::class, 'hashtag_id');
    }
}
