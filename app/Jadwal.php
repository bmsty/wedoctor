<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'hari', 'tanggal', 'waktu_mulai', 'waktu_akhir', 'tempat_id', 'doctor_id',
    ];

    public function doctors()
    {
    	return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function tempats()
    {
        return $this->belongsTo(Tempat::class, 'tempat_id');
    }

    // function untuk mengubah nilai hari, dari indonesia ke inggris
    public function day()
    {
        $days = [
            'Senin'  => 'Monday',
            'Selasa' => 'Tuesday',
            'Rabu'   => 'Wednesday',
            'Kamis'  => 'Thursday',
            'Jumat'  => 'Friday',
            'Sabtu'  => 'Saturday',
            'Minggu' => 'Sunday'
        ];
        return $days[$this->hari];
    }
}
