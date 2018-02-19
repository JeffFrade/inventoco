<?php

namespace InvOco\Repositories;

use InvOco\Repositories\Models\Room;

class RoomRepository extends AbstractRepository
{
    public function __construct(Room $room)
    {
        $this->model = $room;
    }

    public function findRooms($id)
    {
        return $this->model->where('id_sector', $id)->get();
    }
}