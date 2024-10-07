<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportTechnologyImage extends Model
{
    use HasFactory;

    protected $table = 'airporttechnologyimages';

    protected $fillable = [
        'gambar',
        'judul',
        'deskripsi',
    ];
}
