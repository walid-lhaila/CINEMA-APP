<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\LoginRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class LoginRepository implements LoginRepositoryInterface
{
    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }
    public function validatePassword($user, $password)
    {
        return Hash::check($password, $user->password);
    }
}


