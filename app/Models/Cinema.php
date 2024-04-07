<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    Protected $fillable =
        [
            'name',
            'address'
        ];

    public function room(){
        return $this->hasMany(Room::class);
    }
}
