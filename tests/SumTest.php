<?php

declare(strict_types=1);

use App\Sum;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class SumTest extends TestCase
{
    public static function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2],
        ];
    }

    #[DataProvider('additionProvider')]
    public function test_it_can_add_two_numbers(int $a, int $b, int $expected): void
    {
        $sum = new Sum();

        $result = $sum->add($a, $b);

        self::assertEquals($result, $expected);
    }
}
