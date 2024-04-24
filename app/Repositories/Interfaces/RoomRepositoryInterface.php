<?php
namespace App\Repositories\Interfaces;

interface RoomRepositoryInterface {
    public function createRoom(array $data);
    public function getAllRooms();
    public function deleteRoom($roomId);
}
