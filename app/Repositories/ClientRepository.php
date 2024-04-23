<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Movie;
use App\Models\Reservation;
use App\Repositories\Interfaces\ClientRepositoryInterface;

class ClientRepository implements ClientRepositoryInterface
{
    public function getAllMovies(){
        return Movie::all();
    }
    public function getMovieDetails($movieId){
        return Movie::with('cinema', 'room', 'category', 'filmmaker')->find($movieId);
    }

    public function getReservations()
    {
        return Reservation::with('movie')->get();
    }

    public function getCategories()
    {
        return Category::all();
    }
}


