<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi (fillable)
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'director', 'release_year'
    ];


}
