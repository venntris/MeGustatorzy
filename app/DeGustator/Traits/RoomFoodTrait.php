<?php
namespace App\DeGustator\Traits;

use App\Models\RoomFood;

trait RoomFoodTrait {
    public function isUserFoodInTheRoom($room_id, $food_id) {
        if (!RoomFood::where('room_id', $room_id)
            ->where('food_id', $food_id)
            ->first()) {
            return true;
        } else {
            return false;
        }
    }
}
