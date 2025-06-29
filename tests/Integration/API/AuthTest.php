<?php

namespace Tests\Integration\API;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthorized_register_user(): void
    {
        $response = $this->post('/api/register', []);

        $response->assertStatus(401);
    }

    public function test_unauthorized_create_token(): void
    {
        $response = $this->post('/api/token/create', []);

        $response->assertStatus(401);
    }

    public function test_unauthorized_login(): void
    {
        $response = $this->post('/api/login', []);

        $response->assertStatus(401);
    }

    public function test_unauthorized_logout(): void
    {
        $response = $this->post('/api/logout', []);

        $response->assertStatus(401);
    }

    public function test_register_user(): void
    {
        $data = [
            'name' => 'Feature Test User',
            'email' => 'test@feature.com',
            'password' => Hash::make('test1234')
        ];

        $response = $this->post('/api/register', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['token']);
        $this->assertNotEmpty($response['user']);
    }

    public function test_create_token(): void
    {
        $user = User::factory()->create();
        $user->password = Hash::make('test1234');
        $user->save();

        $data = [
            'email' => $user->email,
            'password' => 'test1234'
        ];

        $response = $this->post('/api/token/create', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['token']);
        $this->assertNotEmpty($response['user']);
    }

    public function test_login(): void
    {
        $user = User::factory()->create();
        $user->password = Hash::make('test1234');
        $user->save();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'test1234'
        ];

        $response = $this->post('/api/login', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['token']);
        $this->assertNotEmpty($response['user']);
    }

    public function test_logout(): void
    {
        $user = User::factory()->create();
        $user->password = Hash::make('test1234');
        $user->save();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'test1234'
        ];

        $this->post('/api/login', $data);

        $response = $this->post('/api/logout', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
    }
}
