<?php
namespace App\Repositories;

use App\Models\Movie;
use App\Models\Reservation;
use App\Repositories\Interfaces\ReservationRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ReservationRepository implements  ReservationRepositoryInterface
{
     public function addReservation($userId, $movieId)
        {

            $reservation = Reservation::create([
               'client_id' => $userId,
               'movie_id' => $movieId
            ]);
            $movie = Movie::find($movieId);
            $movie->room->seats -= 1;
            $movie->room->save();

            return $reservation;
        }



}


