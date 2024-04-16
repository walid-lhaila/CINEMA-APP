<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Services\CinemaService;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $cinemaService;
    public function __construct (CinemaService $cinemaService){
        $this->cinemaService = $cinemaService;
    }

    public function cinemaStore(Request $request)
    {
        $cinemaData = $request->only('name', 'address');
        $cinema = $this->cinemaService->createCinema($cinemaData);
        return redirect()->route('categories')->with('success', 'Category created successfully.');
    }
    public function getAllCinemas()
    {
        $cinemas = $this->cinemaService->getAllCinema();
        return response()->json($cinemas);
    }

    public function deleteCinema($cinemaId)
    {
        if(!$cinemaId) {
            return response()->json(['error' => 'cinemaId not found']);
        }
        $deleted = $this->cinemaService->deleteCinema($cinemaId);
        if ($deleted) {
            return response()->json(['success' => 'cinema deleted']);
        } else {
            return response()->json(['error' => 'cinema not deleted']);
        }
    }
}
