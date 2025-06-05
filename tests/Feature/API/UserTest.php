<?php

namespace Tests\Feature\API;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_user(): void
    {
        $user = User::factory()->create();
        $user->password  = Hash::make('test1234');
        $user->save();

        $data = [
            'email' => $user->email,
            'password' => 'test1234'
        ];

        $response = $this->post('/api/token/create', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['user']);
    }
}
