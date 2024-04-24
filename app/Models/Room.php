<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'name',
            'seats',
            'reserved_at',
            'cinema_id',
        ];


    public function cinema() {
        return $this->belongsTo(Cinema::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

}
