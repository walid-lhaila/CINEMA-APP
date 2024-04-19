<?php

namespace App\Http\Controllers;

use App\Services\FilmmakerService;
use Illuminate\Http\Request;

class FilmmakerController extends Controller
{
    protected $filmmakerService;

    public function __construct(FilmmakerService $filmmakerService)
    {
        $this->filmmakerService = $filmmakerService;
    }
    public function addMovie()
    {
        return view('filmmaker.addMovies');
    }

    public function formAddMovie() {
        $cinemas = $this->filmmakerService->getAllCinemas();
        $rooms = $this->filmmakerService->getAllRooms();
        $categories = $this->filmmakerService->getAllCategories();
        return view('filmmaker.formAddMovie', compact('cinemas', 'rooms', 'categories'));
    }
    public function getRoomsByCinema(Request $request)
    {
        $cinemaId = $request->input('cinema_id');
        $rooms = $this->filmmakerService->getRoomsByCinemaId($cinemaId);

        return response()->json($rooms);
    }
}
