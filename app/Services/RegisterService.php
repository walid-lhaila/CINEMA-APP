<?php
namespace App\Services;

use App\Repositories\RegisterRepository;
use http\Client\Curl\User;

class RegisterService
{
    protected $registerRepository;
    public function __construct(RegisterRepository $registerRepository)
    {
        return $this->registerRepository = $registerRepository;
    }

    public function createFilmmaker(array $userData)
    {
        $user = \App\Models\User::create($userData);

        $filmmakerData = ['user_id' => $user->id];
        $this->registerRepository->filmmakerCreate($filmmakerData);

        return $user;
    }

    public function createClient(array $userData)
    {
        $user = \App\Models\User::create($userData);

        $clientData = ['user_id' => $user->id];
        $this->registerRepository->clientCreate($clientData);

        return $user;
    }
}


