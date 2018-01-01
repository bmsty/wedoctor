<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Spesialisasi;
use App\Jadwal;
use App\Rating;

class Doctor extends Model
{
    protected $fillable = [
        'nama_doctor', 'alamat_doctor', 'status', 'spesialisasi_id', 'rating'
    ];

    public function spesialisasi()
    {
    	return $this->belongsTo(Spesialisasi::class);
    }

    public function jadwals()
    {
        return $this->belongsTo(Jadwal::class);
    }

    public function rating()
    {
        // pivot untuk memberitahu bahwa di tabel ratings ada kolom yang bernama rating_user
    	return $this->belongsToMany(User::class, 'ratings')->withPivot('rating_user');
    }
}
