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



    public function getAllUsers()
    {
        return $this->adminRepository->getAllUsers();
    }

}


