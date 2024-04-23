<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Services\ReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $reservationService;
    public function __construct(ReservationService $reservationService){
        $this->reservationService = $reservationService;
    }

    public function storeReservation($movieId)
    {
        $userId = auth()->user()->client->id;
        $this->reservationService->addReservation($userId, $movieId);
        return redirect()->back()->with('success', 'Reservation created successfully!');
    }
}
