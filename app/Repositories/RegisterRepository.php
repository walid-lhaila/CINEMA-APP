<?php
namespace App\Repositories;

use App\Models\Client;
use App\Models\Filmmaker;

class RegisterRepository
{
     public function filmmakerCreate(array $data)
        {
            return Filmmaker::create($data);
        }

    public function clientCreate(array $data)
    {
        return Client::create($data);
    }
}


