<?php

namespace App\DeGustator\Repository;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

/* Lecture 27 */
class Repository  {
    function test() {
        return 'repozytorium dziala';
    }
    public function getUserRooms() {
        //return User::userRooms($id);
        $user_id = 2;
        $userRooms = User::where('id', $user_id)->first()->rooms()->get();
        dd($userRooms);
        return $userRooms;
    }
}


