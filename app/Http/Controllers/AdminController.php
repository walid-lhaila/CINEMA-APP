<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function cinemas()
    {
        return view('admin.cinemas');
    }

    public function movies()
    {
        return view('admin.movies');
    }

    public function categories()
    {
        return view('admin.categories');
    }
}
