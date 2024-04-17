<?php

namespace App\Services\Interfaces;

interface CinemaServiceInterface {

    public function createCinema(array $cinemaData);
    public function getAllCinema();
    public function deleteCinema($cinemaId);
}
