<?php
namespace App\Repositories\Interfaces;

interface ReservationRepositoryInterface{
    public function addReservation($userId, $movieId);

}
