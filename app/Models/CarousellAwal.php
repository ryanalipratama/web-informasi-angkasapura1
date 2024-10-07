<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarousellAwal extends Model
{
    use HasFactory;

    protected $table = 'carousellawal';

    protected $fillable = [
        'gambar'
    ];
}
