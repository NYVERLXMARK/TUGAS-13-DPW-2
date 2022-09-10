<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Desa;
use App\Models\Kabupaten;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    use HasFactory;

    function desa()
    {
        return $this->hasMany(Desa::class, 'desa_id');
    }

    function kebupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id');
    }
}
