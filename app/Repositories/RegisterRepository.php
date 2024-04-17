<?php
namespace App\Repositories;

use App\Models\Client;
use App\Models\Filmmaker;
use App\Repositories\Interfaces\RegisterRepositoryInterface;

class RegisterRepository implements RegisterRepositoryInterface
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


