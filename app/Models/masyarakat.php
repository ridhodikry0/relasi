<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class masyarakat extends Model
{
     protected $fillable = [
        'nomor_kk',
        'nomor_ktp',
        'nama',
        'alamat',
        'jenis_kelamin',
    ];

    public function hasMany($related, $foreignKey = null, $localkey = null) 
    {
        return $this->hasMany(Keluhan:: class, 'masyarakat_id');
    }
}
