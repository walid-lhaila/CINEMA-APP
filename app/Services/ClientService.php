<?php
namespace App\Services;

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

    public function getReservations()
    {
         return $this->clientRepository->getReservations();
    }
    public function getCategories()
    {
        return $this->clientRepository->getCategories();
    }
    public function getMovieOfCategory($categoryId)
    {
        return $this->clientRepository->getMovieOfCategory($categoryId);
    }

}


