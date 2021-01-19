<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use App\Models\UserRoom;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class userRoomsTest extends TestCase
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
        $response = $this->postJson('api/user/get-user-rooms/1');

        $response->assertStatus(200)
            ->assertSuccessful()
            ->assertJson([
            ["id" => 1,
            'owner' => 1,
            'name' => 'Testowy',
            'laravel_through_key' => 1],

    ]);

    }
}
