<?php

namespace Tests\Integration\API;

use App\Models\Record;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecordTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_records(): void
    {
        Record::factory()->create();

        $response = $this->actingAs(User::factory()->create())
            ->get('/api/record');

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['records']);
    }

    public function test_add_record(): void
    {
        $data = [
            'string' => 'test string',
            'text' => 'test text',
            'json' => '{}',
            'boolean' => true,
            'integer' => 10,
            'float' => 9.99
        ];

        $response = $this->actingAs(User::factory()->create())
            ->post('/api/record', $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['record']);
        $this->assertEquals($response['record']['string'], $data['string']);
    }

    public function test_get_record(): void
    {
        $record = Record::factory()->create();

        $response = $this->actingAs(User::factory()->create())
            ->get('/api/record/'.$record->id);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['record']);
    }

    public function test_patch_record(): void
    {
        $record = Record::factory()->create();

        $data = [
            'string' => 'New Record String',
        ];

        $response = $this->actingAs(User::factory()->create())
            ->patch('/api/record/'.$record->id, $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['record']);
        $this->assertEquals($response['record']['string'], $data['string']);
    }

    public function test_put_record(): void
    {
        $record = Record::factory()->create();

        $data = [
            'string' => 'New Record String',
        ];

        $response = $this->actingAs(User::factory()->create())
            ->put('/api/record/'.$record->id, $data);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
        $this->assertNotEmpty($response['record']);
        $this->assertEquals($response['record']['string'], $data['string']);
    }

    public function test_delete_record(): void
    {
        $record = Record::factory()->create();

        $response = $this->actingAs(User::factory()->create())
            ->delete('/api/record/'.$record->id);

        $this->assertTrue($response['success']);
        $this->assertNotEmpty($response['message']);
    }
}
