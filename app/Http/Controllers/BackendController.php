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

    public function inviteUserToRoom($room_id, $user_id) {
        return $this->R->inviteUserToRoom($room_id, $user_id);
    }
    public function createRoom($name) {
        return $this->R->createRoom($name);
    }


}
