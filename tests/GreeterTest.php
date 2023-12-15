<?php 

declare(strict_types=1);

use App\Greeter;
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function test_it_greets_with_name(): void
    {
        $greeter = new Greeter();

        $greeting = $greeter->greet('Alice');

        $this->assertSame('Hello, Alice!', $greeting);
    }

    public function test_it_throws_error_if_string_not_provided()
    {
        $greeter = new Greeter();

        $this->expectException(TypeError::class);

        $greeter->greet(1);
    }
}