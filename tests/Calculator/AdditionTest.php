<?php

declare(strict_types=1);

use App\Calculator\Addition;
use PHPUnit\Framework\TestCase;

final class AdditionTest extends TestCase
{
    public $additionObj;

    protected function setUp(): void
    {
        $this->additionObj = new Addition;
    }

    public function test_it_can_add_numbers()
    {
        $this->additionObj->setNumbers([1, 2]);

        $this->assertSame(3, $this->additionObj->calculate());

    }

    public function test_it_throws_error_if_no_numbers_provided()
    {
        $this->expectException(Exception::class);

        $this->additionObj->calculate();
    }
}
