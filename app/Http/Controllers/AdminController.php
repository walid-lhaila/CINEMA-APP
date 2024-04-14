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

    public function users()
    {
        return view('admin.users');
    }
    public function getAllUsers()
    {
        $users = $this->adminService->getAllUsers();
        return response()->json($users);
    }


    public function cinemas()
    {
        return view('admin.cinemas');
    }
    public function cinemaStore(Request $request)
    {
        $cinemaData = $request->only('name', 'address');
        $cinema = $this->adminService->createCinema($cinemaData);
        return redirect()->route('categories')->with('success', 'Category created successfully.');
    }
    public function getAllCinemas()
    {
        $cinemas = $this->adminService->getAllCinema();
        return response()->json($cinemas);
    }

    public function deleteCinema($cinemaId)
    {
        if(!$cinemaId) {
            return response()->json(['error' => 'cinemaId not found']);
        }
        $deleted = $this->adminService->deleteCinema($cinemaId);
        if ($deleted) {
            return response()->json(['success' => 'cinema deleted']);
        } else {
            return response()->json(['error' => 'cinema not deleted']);
        }
    }




    public function categoryStore(Request $request)
    {
        $categoryData = $request->only('name');
        $category = $this->adminService->createCategory($categoryData);

        return redirect()->route('categories')->with('success', 'Category created successfully.');
    }
    public function categories()
    {
        return view('admin.categories');
    }

    public function getAllCategories()
    {
        $categories = $this->adminService->getAllCategories();
        return response()->json($categories);
    }

    public function deleteCategory($categoryId)
    {
        if (!$categoryId) {
            return response()->json(['error' => 'Category ID is missing'], 400);
        }
        $deleted = $this->adminService->deleteCategory($categoryId);

        if ($deleted) {
            return response()->json(['message' => 'Category deleted successfully']);
        } else {
            return response()->json(['error' => 'Failed to delete category'], 500);
        }
    }




}
