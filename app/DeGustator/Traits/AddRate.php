<?php
namespace App\DeGustator\Traits;

use App\Models\FoodRating;

trait AddRate {
    public function isFoodHasRate($room_id, $food_id, $user_id) {
        if (!FoodRating::where('room_id', $room_id)
            ->where('food_id', $food_id)
            ->where('user_id', $user_id)
            ->first()) {
            return true;
        } else {
            return false;
        }
    }
}
