<?php

declare(strict_types=1);

use App\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public $user;

    protected function setUp(): void
    {
        $this->user = new User;

    }

    public function test_it_gets_first_name()
    {

        $this->user->setFirstName("Alice");

        $this->assertSame($this->user->getFirstName(), "Alice");
    }
    
    public function test_it_trims_first_name()
    {
        $this->user->setFirstName("  Alice   ");

        $this->assertSame($this->user->getFirstName(), "Alice");
    }

    protected function tearDown(): void
    {
        $this->user = null;
    }
}