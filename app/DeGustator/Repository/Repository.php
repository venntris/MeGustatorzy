<?php

namespace App\DeGustator\Repository;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

/* Lecture 27 */
class Repository  {
    function test() {
        return 'repozytorium dziala';
    }
    public function getUserRooms($user_id) {
        $userRooms = User::where('id', $user_id)->first()->rooms()->get();
        return $userRooms;
    }
}


