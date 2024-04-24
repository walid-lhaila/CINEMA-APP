<?php
namespace App\Repositories;

use App\Models\Cinema;
use App\Models\Room;
use App\Repositories\Interfaces\RoomRepositoryInterface;

class RoomRepository implements RoomRepositoryInterface
{
    public function createRoom(array $data)
    {
       return Room::create($data);
    }
    public function getAllRooms()
    {
        return Room::with('cinema')->get();
    }
    public function deleteRoom($roomId)
    {
        return Room::destroy($roomId);
    }
}


