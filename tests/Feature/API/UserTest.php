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

        $response = $this->actingAs($user)
            ->get('/api/user');

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['user']);
    }

    public function test_patch_user(): void
    {
        $user = User::factory()->create();

        $data = [
            'name' => 'New User Name',
            'email' => 'new@email.com',
            'password' => 'newpass1234',
        ];

        $response = $this->actingAs($user)
            ->patch('/api/user', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['user']);
        $this->assertNotEquals($response['user']['name'], $user->name);
    }

    public function test_put_user(): void
    {
        $user = User::factory()->create();

        $data = [
            'name' => 'New User Name',
            'email' => 'new@email.com',
            'password' => 'newpass1234',
        ];

        $response = $this->actingAs($user)
            ->put('/api/user', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['user']);
        $this->assertNotEquals($response['user']['name'], $user->name);
    }

    public function test_delete_user(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->delete('/api/user');

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
    }
}
