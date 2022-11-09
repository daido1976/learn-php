<?php

declare(strict_types=1);

function fizzBuzz(int $i): string
{
  return match (0) {
    $i % 15 => "FizzBuzz",
    $i % 3  => "Fizz",
    $i % 5  => "Buzz",
    default => (string)$i,
  };
}
