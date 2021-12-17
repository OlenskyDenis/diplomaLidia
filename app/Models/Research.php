<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;
    protected $table = 'researches';

    protected $fillable = [
        'lkp',
        'bsk5',
        'hsk',
        'soluble_oxygen',
        'ph',
        'roundworms',
        'conformity',
        'price',
        'reservoir_id',
        'research_type_id',
        'data'
    ];
}
