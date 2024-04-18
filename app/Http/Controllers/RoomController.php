<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Services\Interfaces\RoomServiceInterface;
use App\Services\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $roomService;
    public function __construct(RoomService $roomService){
        $this->roomService = $roomService;
    }

    public function store(Request $request)
    {
        $request->merge(['name' => $this->generateRoomName()]);

        $data = $request->validate([
            'name' => 'required|string',
            'seats' => 'required|numeric|min:10',
            'cinema_id' => 'required|exists:cinemas,id',
        ]);
        $room = $this->roomService->createRoom($data);
        return response()->json(['success' => true, 'room' => $room]);
    }

    private function generateRoomName()
    {
        $lastRoom = Room::latest()->first();
        if ($lastRoom) {
            $lastChar = substr($lastRoom->name, -1);
            return 'Room ' . chr(ord($lastChar) + 1);
        } else {
            return 'Room A';
        }
    }

    public function getAllRooms()
    {
        $rooms = $this->roomService->getAllRooms();
        return response()->json($rooms);
    }

    public function deleteRoom($roomId)
    {
        if(!$roomId){
            return response()->json(['success' => false, 'message' => 'Room not found']);
        }
        $deleted = $this->roomService->deleteRoom($roomId);

        if($deleted){
            return response()->json(['success' => 'room deleted successfully']);
        }else {
            return response()->json(['success' => false, 'message' => 'Room not deleted']);
        }
    }


}
