<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;

    protected $table = 'development';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'gambar'
    ];
}
