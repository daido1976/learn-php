<?php

declare (strict_types = 1);

require_once dirname(__FILE__) . "/fizzbuzz.php";

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testFizzBuzz(): void
    {
        $this->assertSame(fizzBuzz(1), "1");
        $this->assertSame(fizzBuzz(3), "Fizz");
        $this->assertSame(fizzBuzz(5), "Buzz");
        $this->assertSame(fizzBuzz(15), "FizzBuzz");
    }
}
