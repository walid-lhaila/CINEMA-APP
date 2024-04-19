<?php
namespace App\Services\Interfaces;

use App\Models\Cinema;

interface FilmmakerServiceInterface {
    public function getAllCinemas();
    public function getAllCategories();
    public function getAllRooms();
    public function getRoomsByCinemaId($cinemaId);
}
