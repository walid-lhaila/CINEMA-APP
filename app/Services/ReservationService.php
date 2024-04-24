<?php
namespace App\Services;

use App\Repositories\ReservationRepository;
use App\Services\Interfaces\ReservationServiceInterface;

class ReservationService implements ReservationServiceInterface
{
    protected $reservationRepository;
    public function __construct(ReservationRepository $reservationRepository){
        return $this->reservationRepository = $reservationRepository;
    }

    public function addReservation($movieId, $userId)
    {
         $this->reservationRepository->addReservation($movieId, $userId);
    }


}


