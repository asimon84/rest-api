<?php

namespace Tests\Unit;

use App\Models\FAQ;
use PHPUnit\Framework\TestCase;

class FAQModelTest extends TestCase
{
    public function test_get_items(): void
    {
        $this->assertNotEmpty(FAQ::getItems());
        $this->assertEquals(FAQ::getItems(), json_encode([ 'items' => FAQ::ITEMS]));
    }
}
