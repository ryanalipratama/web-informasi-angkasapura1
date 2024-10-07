<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportTechnology extends Model
{
    use HasFactory;

    protected $table = 'airporttechnology';

    protected $fillable =[
        'judul',
        'konten',
    ];
    
}
