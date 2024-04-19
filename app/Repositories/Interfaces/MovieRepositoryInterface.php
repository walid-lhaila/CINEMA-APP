<?php
namespace App\Repositories\Interfaces;

interface MovieRepositoryInterface {

    public function movieCreate(array $data, int $filmmakerId);

    public function getMovies();
}
