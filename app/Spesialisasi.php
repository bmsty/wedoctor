<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;

class Spesialisasi extends Model
{
    protected $fillable = [
        'nama_spesialisasi', 'deskripsi_spesialisasi'
    ];

    public function doctors()
    {
    	return $this->hasMany(Doctor::class);
    }
}
