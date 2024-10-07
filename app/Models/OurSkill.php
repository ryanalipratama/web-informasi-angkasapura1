<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurSkill extends Model
{
    use HasFactory;

    protected $table = 'ourskill';

    protected $fillable =[
        'skill',
        'persentase'
    ];
}
