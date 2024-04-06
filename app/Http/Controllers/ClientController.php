<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function home()
    {
        return view('client.home');
    }

    public function allMovie()
    {
        return view('client.allMovie');
    }


    public function movieDetails()
    {
        return view('client.movieDetails');
    }


    public function moviesOfCategory()
    {
        return view('client.moviesOfCategory');
    }


    public function ticket(Request $request)
    {
        return view('client.ticket');
    }




}
