<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Room;
use App\Repositories\Interfaces\FilmmakerRepositoryInterface;
use Illuminate\Support\Facades\Auth;

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
    public function getMovies()
    {
        $filmmaker = Auth::user()->filmmaker->id;
        return Movie::where('filmmaker_id', $filmmaker)
            ->with('cinema', 'category')
            ->get();
    }
}


