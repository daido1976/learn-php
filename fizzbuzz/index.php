<?php

declare (strict_types = 1);
require_once __DIR__ . "/Fizzbuzz.php";

foreach (range(1, 100) as $i) {
    echo fizzBuzz($i), PHP_EOL;
}
