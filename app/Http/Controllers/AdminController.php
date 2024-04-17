<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\AdminRepository;
use App\Services\AdminService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $adminService;

    public function __construct(AdminService $adminService){
        $this->adminService = $adminService;
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function getUserCount()
    {
        return response()->json(['userCount' => $this->adminService->getUserCount()]);
    }
    public function getCinemaCount()
    {
        return response()->json(['cinemaCount' => $this->adminService->getCinemaCount()]);
    }
    public function getCategoryCount()
    {
        return response()->json(['categoryCount' => $this->adminService->getCategoryCount()]);
    }
    public function getMovieCount()
    {
        return response()->json(['movieCount' => $this->adminService->getMovieCount()]);
    }




    public function getLatestUsers()
    {
        $latestUsers = $this->adminService->getLatestUsers();
        return response()->json($latestUsers);
    }
    public function getLatestCinemas()
    {
        $latestCinemas = $this->adminService->getLatestCinemas();
        return response()->json($latestCinemas);
    }
    public function getLatestCategories()
    {
        $latestCategories = $this->adminService->getLatestCategories();
        return response()->json($latestCategories);
    }
    public function getLatestMovies()
    {
        $latestMovies = $this->adminService->getLatestMovies();
    }







    public function movies()
    {
        return view('admin.movies');
    }
    public function rooms()
    {
        return view('admin.rooms');
    }
    public function users()
    {
        return view('admin.users');
    }

    public function cinemas()
    {
        return view('admin.cinemas');
    }

    public function categories()
    {
        return view('admin.categories');
    }

    public function getAllUsers()
    {
        $users = $this->adminService->getAllUsers();
        return response()->json($users);
    }




}
