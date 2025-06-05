<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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

        $response->assertStatus(200);
//        $response->assertHasNoErrors();
//        $response->assertTrue();
//        $response->assertNotEmpty(($response->decodeResponseJson())->json('user'));
    }
}
