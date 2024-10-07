<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningCenterContent extends Model
{
    use HasFactory;

    protected $table = 'learningcentercontent';

    protected $fillable = [
        'namafile',
        'file',
        'remarks',
    ];
}
