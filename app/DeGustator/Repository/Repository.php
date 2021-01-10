<?php

namespace App\DeGustator\Repository;

use App\DeGustator\Traits\UserRoomTrait;
use App\Models\UserRoom;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/* Lecture 27 */
class Repository
{
    use UserRoomTrait;
    function test()
    {
        return 'repozytorium dziala';
    }

    public function getUserRooms($user_id)
    {
        $userRooms = User::where('id', $user_id)->first()->rooms()->get();
        return $userRooms;
    }

    public function inviteUserToRoom($room_id, $user_id)
    {
        if ($this->isUserInTheRoom($room_id, $user_id)) {
            UserRoom::create([
                'room_id' => $room_id,
                'user_id' => $user_id,
            ]);

            return response()->json(['message' => 'Użytkownik dodany']);

        }
        return response()->json(['message' => 'Użytkownik jest obecnie w pokoju'], 404);

    }
}


