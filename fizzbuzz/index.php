<?php

declare (strict_types = 1);
require_once dirname(__FILE__) . "/fizzbuzz.php";

foreach (range(1, 100) as $i) {
    echo fizzBuzz($i), PHP_EOL;
}
