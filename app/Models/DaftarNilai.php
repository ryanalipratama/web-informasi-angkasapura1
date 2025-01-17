<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarNilai extends Model
{
    use HasFactory;

    protected $table = 'daftarnilai';

    protected $fillable = [
        'namafile',
        'link',
        'remarks'
    ];
}
