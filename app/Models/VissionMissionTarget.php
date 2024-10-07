<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VissionMissionTarget extends Model
{
    use HasFactory;

    protected $table = 'vissionmissiontarget';
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'icon'
    ];
}
