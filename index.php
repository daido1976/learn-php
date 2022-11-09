<?php

declare(strict_types=1);

function fizzBuzz(int $i): string
{
  if (($i % 3 !== 0) && ($i % 5 !== 0)) {
    return (string)$i;
  } else if ($i % 3 === 0) {
    return "Fizz";
  } else if ($i % 5 === 0) {
    return 'Buzz';
  }
}

// foreach (range(1, 100) as $i) {
//   echo fizzBuzz($i), PHP_EOL;
// }

use C;

$c = new C(100);
$c->puts();
