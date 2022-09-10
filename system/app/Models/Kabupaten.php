<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;
use App\Models\Provinsi;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';
    use HasFactory;

    function kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'kabupaten_id');
    }

    function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}
