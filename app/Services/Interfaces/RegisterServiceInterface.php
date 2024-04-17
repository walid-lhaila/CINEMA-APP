<?php
namespace App\Services\Interfaces;

interface RegisterServiceInterface {
    public function createFilmmaker(array $userData);
    public function createClient(array $userData);
}
