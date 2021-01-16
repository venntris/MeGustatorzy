<?php
namespace App\DeGustator\Traits;

use App\Models\UserRoom;
use App\Models\Room;

trait RoomTrait {
    public function isUserRoomOwner($room_id) {
        if (Room::where('id', $room_id)
            ->where('owner', auth()->user()->id)
            ->first()) {
            return true;

    } else {
        return false;
        }
    }
}
