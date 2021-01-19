<?php

namespace Tests\Feature;

use App\Models\Room;
use App\Models\User;
use App\Models\UserRoom;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use mysql_xdevapi\Exception;
use Tests\TestCase;

class LoginTest extends TestCase
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

        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');

        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/home');

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $user->email,
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);








    }
}
