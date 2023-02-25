<?php

/**
 * Calculate how many years it will take to reach the population goal.
 * @param int $p0
 * @param float $percent
 * @param int $aug
 * @param int $p
 * @return int
 */
function nbYear(int $p0, float $percent, int $aug, int $p): int
{
    $currentYear = 0;
    $percent /= 100;
    while ($p0 < $p) {
        $p0 += intval($p0 * $percent + $aug);
        $currentYear++;
    }

    return $currentYear;
}

// Using this function
echo nbYear(1000, 2, 50, 1214); // Output: 4