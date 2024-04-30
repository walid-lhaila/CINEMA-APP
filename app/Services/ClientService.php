<?php
namespace App\Services;

use App\Models\Movie;
use App\Repositories\ClientRepository;
use App\Services\Interfaces\ClientServiceInterface;

class ClientService implements ClientServiceInterface
{
    protected $clientRepository;
    public function __construct(ClientRepository $clientRepository){
            $this->clientRepository = $clientRepository;
    }

    public function getAllMovies(){
        return $this->clientRepository->getAllMovies();
    }

    public function getMovieDetails($movieId){
        return $this->clientRepository->getMovieDetails($movieId);
    }
    public function getMoviesOfCategory($categoryId)
    {
        return Movie::where('category_id', $categoryId)->limit(4)->get();
    }

    public function getReservations()
    {
         return $this->clientRepository->getReservations();
    }
    public function getCategories()
    {
        return $this->clientRepository->getCategories();
    }
    public function moviesOfCategory($categoryId)
    {
        return $this->clientRepository->moviesOfCategory($categoryId);
    }

    public function getLatestMovies()
    {
        return $this->clientRepository->getLatestMovies();
    }
}


