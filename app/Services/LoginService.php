<?php
namespace App\Services;

use App\Repositories\Interfaces\LoginRepositoryInterface;
use App\Repositories\LoginRepository;
use App\Services\Interfaces\LoginServiceInterface;

class LoginService implements LoginServiceInterface
{
    protected $loginRepository;

    public function __construct(LoginRepository $loginRepository){
        $this->loginRepository = $loginRepository;
    }

    public function login(array $credentials)
    {
        $user = $this->loginRepository->findUserByEmail($credentials['email']);


        if (!$user) {
            return ['status' => 'error', 'message' => 'User not found'];
        }

        if (!$this->loginRepository->validatePassword($user, $credentials['password'])) {
            return ['status' => 'error', 'message' => 'Invalid password'];
        }

        return ['status' => 'success', 'user' => $user];
    }
}


