<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_user(): void
    {
        $data = [
            'name' => "Feature Test User",
            'email' => "test@feature.com",
            'password' => Hash::make('test1234')
        ];

        $response = $this->post('/api/register', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['token']);
        $this->assertNotEmpty($response['user']);
    }
}
