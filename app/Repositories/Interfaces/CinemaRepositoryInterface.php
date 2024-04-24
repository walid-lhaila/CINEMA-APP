<?php

namespace App\Repositories\Interfaces;

interface CinemaRepositoryInterface {

    public function cinemaCreate(array $data);
    public function getAllCinema();
    public function deleteCinema($cinemaId);
}

?>
