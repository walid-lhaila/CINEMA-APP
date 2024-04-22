<?php
namespace App\Repositories;

use App\Models\Movie;
use App\Repositories\Interfaces\ClientRepositoryInterface;

class ClientRepository implements ClientRepositoryInterface
{
    public function getAllMovies(){
        return Movie::all();
    }
    public function getMovieDetails($movieId){
        return Movie::with('cinema', 'room', 'category', 'filmmaker')->find($movieId);
    }
}


