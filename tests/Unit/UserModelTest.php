<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
    public function test_initials(): void
    {
        $user = new User([
            'name' => 'Test User'
        ]);

        $this->assertEquals($user->initials(), 'TU');
    }
}
