<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Pasien;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'nama', 'jenis_kelamin', 'alamat', 'nik'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pasiens()
    {   
        return $this->hasMany(Pasien::class);
    }

    public function rating()
    {
        // Pivot menunjukkan ada data kolom namanya rating_user di dalam tabel ratings
        return $this->belongsToMany(Doctor::class, 'ratings')->withPivot(['rating_user']);
    }
}
