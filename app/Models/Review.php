<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    public $primaryKey = 'id';

    protected $fillable = [
        'user_id', 'hotel_id', 'rating', 'description'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
