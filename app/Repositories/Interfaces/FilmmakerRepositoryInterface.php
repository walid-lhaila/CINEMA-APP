<?php
namespace App\Repositories\Interfaces;
use App\Models\Category;
use App\Models\Cinema;

interface FilmmakerRepositoryInterface {
    public function getAllCinemas();
    public function getAllCategories();
    public function getAllRooms();
    public function getRoomsByCinemaId($cinemaId);
}
