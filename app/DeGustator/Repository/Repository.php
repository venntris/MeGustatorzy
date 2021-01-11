<?php

namespace App\DeGustator\Repository;

use App\DeGustator\Traits\RoomTrait;
use App\DeGustator\Traits\UserRoomTrait;
use App\DeGustator\Traits\RoomFoodTrait;
use App\Models\FoodRating;
use App\Models\UserRoom;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Room;
use App\Models\RoomFood;


class Repository
{
    use UserRoomTrait;
    use RoomFoodTrait;
    use RoomTrait;

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
        if ($this->isUserRoomOwner($room_id)) {
            if (!$this->isUserInTheRoom($room_id, $user_id)) {
                UserRoom::create([
                    'room_id' => $room_id,
                    'user_id' => $user_id,
                ]);
                return response()->json(['message' => 'Użytkownik dodany']);
            }
            return response()->json(['message' => 'Użytkownik jest obecnie w pokoju'], 404);
        }
        return response()->json(['message' => 'Nie jesteś właścicielem pokoju'], 404);

    }

    public function deleteUserFromRoom($room_id, $user_id)
    {
        if ($this->isUserRoomOwner($room_id)) {
            if ($this->isUserInTheRoom($room_id, $user_id)) {
                UserRoom::where('room_id', $room_id)
                    ->where('user_id', $user_id)
                    ->delete();
                return response()->json(['message' => 'Użytkownik usunięty']);
            }

            return response()->json(['message' => 'Użytkownika nie ma w pokoju'], 404);
        }
        return response()->json(['message' => 'Nie jesteś właścicielem pokoju'], 404);
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
    public function getUserRating($user_id)
    {
        $rating =  User::where('id', $user_id)->first()->ratings()->get();
        return $rating;

    }
}


