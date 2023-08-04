<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Titulos extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at'  => 'date:d-m-Y',
    ];

    public function getArchivoLinkAttribute()
    {   
        return Storage::url($this->archivo);
    }
}
