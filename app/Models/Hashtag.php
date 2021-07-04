<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $table = 'hashtags';
    public $primaryKey = 'id';

    protected $fillable = [
        'name', 'code', 
    ];
}
