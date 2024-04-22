<?php
namespace App\Services\Interfaces;

interface ClientServiceInterface{

    public function getAllMovies();
    public function getMovieDetails($movieId);
}
