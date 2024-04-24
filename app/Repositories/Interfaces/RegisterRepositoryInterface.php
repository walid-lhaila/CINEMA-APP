<?php

namespace App\Repositories\Interfaces;

interface RegisterRepositoryInterface {
    public function filmmakerCreate(array $data);
    public function clientCreate(array $data);
}
