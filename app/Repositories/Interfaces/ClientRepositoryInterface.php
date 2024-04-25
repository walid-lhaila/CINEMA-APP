<?php
namespace App\Repositories\Interfaces;

interface ClientRepositoryInterface{

    public function getAllMovies();
    public function getMovieDetails($movieId);
    public function getReservations();
    public function getCategories();
    public function getMovieOfCategory($categoryId);
    public function getLatestMovies();
    public function getMoviesOfCategory($categoryId);


}
