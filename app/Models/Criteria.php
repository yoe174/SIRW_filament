<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'kriteria',
        'kode_kriteria',
        'bobot',
        'jenis',
    ];
}
