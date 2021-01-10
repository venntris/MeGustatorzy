<?php

namespace App\DeGustator\Repository;

use App\DeGustator\Traits\UserRoomTrait;
use App\DeGustator\Traits\RoomFoodTrait;
use App\Models\UserRoom;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Room;
use App\Models\RoomFood;

/* Lecture 27 */
class Repository
{
    use UserRoomTrait;
    use RoomFoodTrait;
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
    public function addFoodToRoom($room_id, $food_id)
    {
        if ($this->isUserFoodInTheRoom($room_id, $food_id)) {
            RoomFood::create([
                'room_id' => $room_id,
                'food_id' => $food_id,
            ]);
            return response()->json(['message' => 'Posiłek dodany']);
        }
        return response()->json(['message' => 'Posiłek jest już dodany do degustacji'], 404);

    }
    public function createRoom($name)
    {
        Room::create([
            'owner'=>auth()->user()->id,
            'name'=>$name,
        ]);
        return response()->json(['message' => 'Pokój został utworzony']);

    }
}


