<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $clientServices;
    public function __construct(ClientService $clientServices){
        $this->clientServices = $clientServices;
    }

    public function home()
    {
        $categories = $this->clientServices->getCategories();
        return view('client.home', compact('categories'));
    }

    public function allMovie()
    {
        return view('client.allMovie');
    }
    public function getAllMovies()
    {
        $movies = $this->clientServices->getAllMovies();
        return response()->json($movies);
    }


    public function movieDetails(Request $request)
    {
        $movieId = $request->input('id');
        $movie = $this->clientServices->getMovieDetails($movieId);
        return view('client.movieDetails', compact('movie'));
    }


    public function moviesOfCategory()
    {
        return view('client.moviesOfCategory');
    }


    public function ticket()
    {
        $reservations = $this->clientServices->getReservations();
        return view('client.ticket', compact('reservations'));
    }





}
