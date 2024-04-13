<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Cinema;
use App\Models\User;

class AdminRepository
{
    public function categoryCreate(array $data)
    {
        return Category::create($data);
    }
    public function getAllCategories()
    {
        return Category::all();
    }
    public function deleteCategory($categoryId)
    {
        return Category::destroy($categoryId);
    }



    public function cinemaCreate(array $data)
    {
        return Cinema::create($data);
    }
    public function getAllCinema()
    {
        return Cinema::all();
    }
    public function deleteCinema($cinemaId)
    {
        return Cinema::destroy($cinemaId);
    }



    public function getAllUsers()
    {
        return User::all();
    }


    public function getUserCount()
    {
        return User::count();
    }
    public function getLatestUsers()
    {
        return User::latest()->take(5)->get();
    }
    public function getLatestCinemas()
    {
        return Cinema::latest()->take(5)->get();
    }


}


