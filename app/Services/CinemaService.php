<?php
namespace App\Services;

use App\Models\Cinema;
use App\Repositories\CinemaRepository;

class CinemaService
{
    protected $cinemaRepository;
    public function __construct(CinemaRepository $cinemaRepository){
        $this->cinemaRepository = $cinemaRepository;
    }

    public function createCinema(array $cinemaData)
    {
        $cinema = Cinema::create($cinemaData);
        return $cinema;
    }
    public function getAllCinema()
    {
        return $this->cinemaRepository->getAllCinema();
    }
    public function deleteCinema($cinemaId)
    {
        return $this->cinemaRepository->deleteCinema($cinemaId);
    }

}


