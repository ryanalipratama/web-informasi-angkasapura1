<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurServiceData extends Model
{
    use HasFactory;

    protected $table = 'ourservicedata';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar'
    ];
}
