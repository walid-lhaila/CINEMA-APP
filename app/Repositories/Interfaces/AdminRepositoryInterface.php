<?php
namespace App\Repositories\Interfaces;


interface AdminRepositoryInterface
{
    public function getAllUsers();
    public function getAllCinemas();
    public function getUserCount();
    public function getCinemaCount();
    public function getCategoryCount();
    public function getMovieCount();
    public function getLatestUsers();
    public function getLatestCinemas();
    public function getLatestCategories();
    public function getLatestMovies();
}
