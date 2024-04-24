<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    protected $clientServices;
    public function __construct(ClientService $clientServices){
        $this->clientServices = $clientServices;
    }

    public function home()
    {
        $user = Auth::user();
        $categories = $this->clientServices->getCategories();
        return view('client.home', compact('categories', 'user'));
    }

    public function allMovie()
    {
        $user = Auth::user();
        return view('client.allMovie', compact('user'));
    }

    public function getAllMovies()
    {
        $user = Auth::user();
        $movies = $this->clientServices->getAllMovies();
        return response()->json($movies);
    }

    public function movieDetails($movieId)
    {
        $user = Auth::user();
        $movie = $this->clientServices->getMovieDetails($movieId);
        return view('client.movieDetails', compact('movie', 'user'));
    }

    public function moviesOfCategory($categoryId)
    {
        $user = Auth::user();
        $category = Category::find($categoryId);
        $movies = $this->clientServices->getMovieOfCategory($categoryId);
        return view('client.moviesOfCategory', compact('movies', 'category','user'));
    }

    public function ticket()
    {
        $user = Auth::user();
        $reservations = $this->clientServices->getReservations();
        return view('client.ticket', compact('reservations', 'user'));
    }





}
