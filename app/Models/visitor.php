<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',
        'city',
        'time_zone',
        "page"
    ];
}
