<?php

declare (strict_types = 1);

function fizzBuzz(int $i): string
{
    if ($i % 15 === 0) {
        return 'FizzBuzz';
    } elseif ($i % 3 === 0) {
        return 'Fizz';
    } elseif ($i % 5 === 0) {
        return 'Buzz';
    }

    return (string) $i;
}
