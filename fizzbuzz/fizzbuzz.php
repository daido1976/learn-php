<?php

declare(strict_types=1);

function fizzBuzz(int $i): string
{
  if ($i % 15 === 0) {
    return 'FizzBuzz';
  } else if ($i % 3 === 0) {
    return 'Fizz';
  } else if ($i % 5 === 0) {
    return 'Buzz';
  }

  return (string)$i;
}
