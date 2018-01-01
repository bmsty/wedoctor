<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $fillable = [
        'tempat', 'alamat'
    ];

    public function jadwals()
    {
    	return $this->hasMany(Jadwal::class);
    }
}
