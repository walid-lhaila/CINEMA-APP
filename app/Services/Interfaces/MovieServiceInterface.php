<?php
namespace App\Services\Interfaces;

interface MovieServiceInterface {
    public function movieCreate(array $data, int $filmmakerId);

}
