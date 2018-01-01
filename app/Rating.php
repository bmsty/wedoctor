<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rating_akhir', 'rating_user', 'user_id'
    ];

    // public function doctors()
    // {
    // 	return $this->hasMany(Doctor::class);
    // }
}
