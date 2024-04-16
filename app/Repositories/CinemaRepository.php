<?php
namespace App\Repositories;

use App\Models\Cinema;

class CinemaRepository
{
    public function cinemaCreate(array $data)
    {
        return Cinema::create($data);
    }
    public function getAllCinema()
    {
        return Cinema::all();
    }
    public function deleteCinema($cinemaId)
    {
        return Cinema::destroy($cinemaId);
    }

}


