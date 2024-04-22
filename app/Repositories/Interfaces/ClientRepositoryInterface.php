<?php
namespace App\Repositories\Interfaces;

interface ClientRepositoryInterface{

    public function getAllMovies();
    public function getMovieDetails($movieId);
}
