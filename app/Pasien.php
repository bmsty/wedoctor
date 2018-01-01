<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jadwal;
use App\Doctor;

class Pasien extends Model
{
    protected $fillable = [
        'nama_pasien', 'tanggal_lahir_pasien', 'jenis_kelamin_pasien', 'alamat_pasien', 'riwayat_sakit', 'no_urut', 'tanggal_berobat', 'waktu_masuk', 'waktu_aman', 'user_id', 'jadwal_id'
    ];

    // biar bisa di carbon format
    protected $dates = [
        'tanggal_lahir_pasien' ,
        'tanggal_berobat' ,
    ];

    public function jadwal()
    {
    	return $this->belongsTo(Jadwal::class);
    }

    public function doctor()
    {
    	return $this->belongsTo(Doctor::class);
    }

    // function untuk akses nama doctor biar ga kepanjangan pas di view kalo mau akses nya
    public function nama_doctor()
    {
    	return $this->jadwal->doctors->nama_doctor;
    }
}

