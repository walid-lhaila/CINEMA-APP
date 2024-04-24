<?php
namespace App\Repositories\Interfaces;

interface LoginRepositoryInterface {
    public function findUserByEmail($email);
    public function validatePassword($user, $password);
}


