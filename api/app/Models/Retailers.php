<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adress',
        'lat',
        'long',
        'description'
    ];
    
}
