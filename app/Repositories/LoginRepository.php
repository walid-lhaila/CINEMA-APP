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

    public function create(array $data, $type)
    {
        $user = User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        switch ($type) {
            case 'client':
                $user->client()->create([]);
                break;
            case 'filmmaker':
                $user->filmmaker()->create([]);
                break;
            case 'admin':
                $user->admin()->create([]);
                break;
        }
        return $user;
    }
}


