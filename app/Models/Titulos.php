<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulos extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at'  => 'date:d-m-Y',
    ];
}
