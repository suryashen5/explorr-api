<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facilities';
    public $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];
}
