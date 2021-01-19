<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use App\Models\UserRoom;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use mysql_xdevapi\Exception;
use Tests\TestCase;

class createRoomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        Artisan::call('migrate:refresh');
        $user = User::create([
            'name' => 'Test',
            'surname' => 'Test1',
            'email' => 'test@example.com',
            'password' => bcrypt('pass'),
        ]);
        $room = Room::create([
            'owner' => $user->id,
            'name' => 'Testowy',
        ]);
        UserRoom::create([
            'user_id' => $user->id,
            'room_id' => $room->id,
        ]);
        $response = $this->actingAs($user)->postJson('api/room/create-room/testowo');

        if(Room::where('name', 'testowo')->first()) {
            $response->assertStatus(200)
                ->assertSuccessful()
                ->assertJson(["message" => 'Pokój został utworzony']);
        } else {
//            fail('Tested link does not create room');
            throw new \PHPUnit\Runner\Exception("Tested link does not create room");
        }






    }
}
