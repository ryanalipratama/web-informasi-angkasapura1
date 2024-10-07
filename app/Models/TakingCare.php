<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TakingCare extends Model
{
    use HasFactory;

    protected $table = 'takingcare';

    protected $fillable =[
        'judul',
        'deskripsi',
        'icon'
    ];
}
