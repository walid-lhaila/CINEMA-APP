<?php
namespace App\Services;

use App\Models\Cinema;
use App\Repositories\FilmmakerRepository;
use App\Services\Interfaces\FilmmakerServiceInterface;

class FilmmakerService implements FilmmakerServiceInterface
{
    protected $filmmakerRepository;
    public function __construct(FilmmakerRepository $filmmakerRepository){
        $this->filmmakerRepository = $filmmakerRepository;
    }

    public function getAllCinemas()
    {
        return $this->filmmakerRepository->getAllCinemas();
    }
    public function getAllCategories()
    {
        return $this->filmmakerRepository->getAllCategories();
    }
    public function getAllRooms()
    {
        return $this->filmmakerRepository->getAllRooms();
    }
    public function getRoomsByCinemaId($cinemaId)
    {
        return $this->filmmakerRepository->getRoomsByCinemaId($cinemaId);
    }
    public function getMovies()
    {
        return $this->filmmakerRepository->getMovies();
    }

}


