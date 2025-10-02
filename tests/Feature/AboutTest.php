<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_the_login_page(): void
    {
        $response = $this->get('/about');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_can_visit_the_about_page(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/about');
        $response->assertStatus(200);
    }
}
