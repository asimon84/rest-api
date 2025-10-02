<?php

namespace Tests\Feature;

use App\Models\Record;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecordsTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_the_login_page(): void
    {
        $response = $this->get('/records');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_can_view_records(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/records');
        $response->assertStatus(200);
    }

    public function test_guests_are_redirected_to_the_login_page_when_viewing_single_record(): void
    {
        $response = $this->get('/record/1');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_can_view_single_record(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $record = Record::factory()->create();

        $response = $this->get('/record/'.$record->id);
        $response->assertStatus(200);
    }
}
