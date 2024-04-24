<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'client_id',
            'movie_id'
        ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
