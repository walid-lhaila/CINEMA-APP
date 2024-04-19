<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Services\MovieService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{

    protected $movieService;
    public function __construct(MovieService $movieService){
        $this->movieService = $movieService;
    }

    public function createMovie(Request $request) {
        $user = Auth::user();
        if (!$user) {
            return view('login')->with('error', 'You must be logged in to add a movie.');
        }

        $data = $request->only(['title', 'description', 'date', 'cinema_id', 'room_id', 'category_id', 'image', 'trailer']);
        $filmmakerId = $user->filmmaker->id;
        $movie = $this->movieService->movieCreate($data, $filmmakerId);
        return view('filmmaker.addMovies')->with('success', 'Movie added successfully.');
    }

    public function getMovies(){
        $movies = $this->movieService->getMovies();
        return view('filmmaker.addMovies', compact('movies'))->with('success', 'Movies added successfully.');
    }


}
