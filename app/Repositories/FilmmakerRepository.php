<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Cinema;
use App\Models\Room;
use App\Repositories\Interfaces\FilmmakerRepositoryInterface;

class FilmmakerRepository implements FilmmakerRepositoryInterface
{
    public function getAllCinemas(){
        return Cinema::all();
    }
    public function getAllCategories()
    {
        return Category::all();
    }
    public function getAllRooms(){
        return Room::all();
    }
    public function getRoomsByCinemaId($cinemaId)
    {
        return Room::where('cinema_id', $cinemaId)->get();
    }
}


