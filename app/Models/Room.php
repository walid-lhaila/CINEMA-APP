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
            'cinema_id',
        ];

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::creating(function ($room) {
            $lastRoom = Room::latest()->first();
            if ($lastRoom){
                $lastChar = $lastRoom->name;
                $room->numero = ++$lastChar;
            }else{
                $room->name = 'A';
            }
        });
    }

    public function cinema() {
        return $this->belongsTo(Cinema::class);
    }

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

}
