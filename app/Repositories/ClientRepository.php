<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Movie;
use App\Models\Reservation;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ClientRepository implements ClientRepositoryInterface
{
    public function getAllMovies(){
        return Movie::all();
    }
    public function getMovieDetails($movieId){
        return Movie::with('cinema', 'room', 'category', 'filmmaker')->find($movieId);
    }

    public function getMoviesOfCategory($categoryId)
    {
        return Movie::where('category_id', $categoryId)->limit(4)->get();
    }

    public function getReservations()
    {
        $userId = Auth::user()->client->id;
        return Reservation::where('client_id', $userId)->with('movie')->paginate(3);
    }

    public function getCategories()
    {
        return Category::all();
    }

    public function moviesOfCategory($categoryId)
    {
        return Movie::where('category_id', $categoryId)->get();
    }
    public function getLatestMovies()
    {
        return Movie::latest()->take(5)->get();
    }


}


