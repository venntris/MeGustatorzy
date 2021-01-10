<?php
namespace App\DeGustator\Traits;

use App\Models\UserRoom;

trait UserRoomTrait {
    public function isUserInTheRoom($room_id, $user_id) {
        if (!UserRoom::where('room_id', $room_id)
            ->where('user_id', $user_id)
            ->first()) {
            return true;

    } else {
        return false;
        }
    }
}
