<?php
namespace App\Services\Interfaces;
interface AdminServiceInterface
{
    public function getUserCount();
    public function getCinemaCount();
    public function getCategoryCount();
    public function getMovieCount();
    public function getLatestUsers();
    public function getLatestCinemas();
    public function getLatestCategories();
    public function getLatestMovies();
    public function getAllUsers();
    public function getAllCinemas();
    public function banUser($userId);
}
