<?php

namespace App\Http\Controllers;

use App\Services\FilmmakerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmmakerController extends Controller
{
    protected $filmmakerService;

    public function __construct(FilmmakerService $filmmakerService)
    {
        $this->filmmakerService = $filmmakerService;
    }
    public function addMovie()
    {
        $user = Auth::user();
        $movies = $this->filmmakerService->getMovies();
        return view('filmmaker.addMovies', compact('movies', 'user'));
    }

    public function formAddMovie() {
        $user = Auth::user();
        $cinemas = $this->filmmakerService->getAllCinemas();
        $rooms = $this->filmmakerService->getAllRooms();
        $categories = $this->filmmakerService->getAllCategories();
        return view('filmmaker.formAddMovie', compact('cinemas', 'rooms', 'categories', 'user'));
    }
    public function getRoomsByCinema(Request $request)
    {
        $cinemaId = $request->input('cinema_id');
        $rooms = $this->filmmakerService->getRoomsByCinemaId($cinemaId);

        return response()->json($rooms);
    }
}
