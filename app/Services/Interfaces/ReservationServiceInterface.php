<?php
namespace App\Services\Interfaces;
interface ReservationServiceInterface{
    public function addReservation($movieId, $userId);
}
