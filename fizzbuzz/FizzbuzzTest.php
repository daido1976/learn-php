<?php

declare (strict_types = 1);

require_once __DIR__ . "/Fizzbuzz.php";

use PHPUnit\Framework\TestCase;

final class FizzbuzzTest extends TestCase
{
    public function testFizzBuzz(): void
    {
        $this->assertSame(fizzBuzz(1), "1");
        $this->assertSame(fizzBuzz(3), "Fizz");
        $this->assertSame(fizzBuzz(5), "Buzz");
        $this->assertSame(fizzBuzz(15), "FizzBuzz");
    }
}
