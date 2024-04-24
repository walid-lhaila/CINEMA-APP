<?php
namespace App\Services;

use App\Repositories\RoomRepository;
use App\Services\Interfaces\RoomServiceInterface;

class RoomService implements RoomServiceInterface
{
    protected $roomRepository;
    public function __construct(RoomRepository $roomRepository){
        $this->roomRepository = $roomRepository;
    }

    public function createRoom(array $data)
    {
       return $this->roomRepository->createRoom($data);
    }
    public function getAllRooms()
    {
        return $this->roomRepository->getAllRooms();
    }
    public function deleteRoom($roomId)
    {
        return $this->roomRepository->deleteRoom($roomId);
    }
}


