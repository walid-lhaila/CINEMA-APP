<?php
namespace App\Services\Interfaces;

interface RoomServiceInterface {
    public function createRoom(array $data);
    public function getAllRooms();
    public function deleteRoom($roomId);
}
