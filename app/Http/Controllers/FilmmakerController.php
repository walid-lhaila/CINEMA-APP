<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmmakerController extends Controller
{
    public function addMovie()
    {
        return view('filmmaker.addMovies');
    }

    public function formAddMovie() {
        return view('filmmaker.formAddMovie');
    }
}
