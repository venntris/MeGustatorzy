<?php

namespace App\Http\Controllers;
use App\DeGustator\Repository\Repository;
use App\DeGustator\Gateway\Gateway;

use App\Models\UserRoom;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct(Repository $Repository, Gateway $Gateway)
    {
        /* $this->middleware('auth');*/
        $this->R = $Repository;
        $this->G = $Gateway;
    }

    public function getUserRooms($user_id) {
        return $this->R->getUserRooms($user_id);
    }

    public function createRoom($name) {
        return $this->R->createRoom($name);
    }
    public function inviteUserToRoom($room_id, $user_id) {
        return $this->R->inviteUserToRoom($room_id, $user_id);
    }
    public function addFoodToRoom($room_id, $food_id) {
        return $this->R->addFoodToRoom($room_id, $food_id);
    }

    public function deleteUserFromRoom($room_id, $user_id) {
        return $this->R->deleteUserFromRoom($room_id, $user_id);
    }
    public function getUserRatings($user_id) {
        return $this->R->getUserRatings($user_id);
    }
    public function addRatings($room_id, $food_id, $user_id, $rate) {
        return $this->R->addRatings($room_id, $food_id, $user_id, $rate);
    }


}
