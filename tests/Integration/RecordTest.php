<?php

namespace Tests\Unit;

use App\Models\Record;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecordTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_records_lats_x_days(): void
    {
        Record::factory()->create();

        $data = Record::getRecordsLastXDays()[1];

        array_shift($data);

        $this->assertNotEquals(array_sum($data), 0);
    }
}
