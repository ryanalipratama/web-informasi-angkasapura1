<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeraturanPKL extends Model
{
    use HasFactory;

    protected $table = 'peraturanpkl';

    protected $fillable = [
        'paragraf',
        'gambar'
    ];
}
