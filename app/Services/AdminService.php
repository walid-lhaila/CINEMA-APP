<?php
namespace App\Services;

use App\Models\Category;
use App\Models\Cinema;
use App\Repositories\AdminRepository;

class AdminService
{
    protected $adminRepository;

    public function __construct(AdminRepository $adminRepository){
        $this->adminRepository = $adminRepository;
    }

    public function getUserCount()
    {
        return $this->adminRepository->getUserCount();
    }
    public function getCinemaCount()
    {
        return $this->adminRepository->getCInemaCount();
    }
    public function getCategoryCount()
    {
        return $this->adminRepository->getCategoryCount();
    }
    public function getMovieCount()
    {
        return $this->adminRepository->getMovieCount();
    }


    public function getLatestUsers()
    {
        return $this->adminRepository->getLatestUsers();
    }
    public function getLatestCinemas()
    {
        return $this->adminRepository->getLatestCinemas();
    }
    public function getLatestCategories()
    {
        return $this->adminRepository->getLatestCategories();
    }
    public function getLatestMovies()
    {
        return $this->adminRepository->getLatestMovies();
    }





    public function createCategory(array $categoryData)
    {
        $category = Category::create($categoryData);
        return $category;
    }
    public function getAllCategories()
    {
        return $this->adminRepository->getAllCategories();
    }
    public function deleteCategory($categoryId)
    {
        return $this->adminRepository->deleteCategory($categoryId);
    }





    public function createCinema(array $cinemaData)
    {
        $cinema = Cinema::create($cinemaData);
        return $cinema;
    }
    public function getAllCinema()
    {
        return $this->adminRepository->getAllCinema();
    }
    public function deleteCinema($cinemaId)
    {
        return $this->adminRepository->deleteCinema($cinemaId);
    }




    public function getAllUsers()
    {
        return $this->adminRepository->getAllUsers();
    }

}


