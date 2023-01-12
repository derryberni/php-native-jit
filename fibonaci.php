<?php

function fib(int $number): int
{
    if ($number <= 1) {
        return $number;
    }

    return fib($number - 1) + fib($number - 2);
}

$startTime = microtime(true);
echo fib(40).PHP_EOL;
$endTime = microtime(true);

echo sprintf('%.2f sec', $endTime - $startTime);
