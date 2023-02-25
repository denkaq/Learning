<?php

/**
 * Summary of bouncingBall.
 * @param float $currentBounceHeight
 * @param float $bounce
 * @param float $window
 * @return int
 */
function bouncingBall(float $currentBounceHeight, float $bounce, float $window)
{
    if ($currentBounceHeight <= 0 || $bounce <= 0 || $bounce >= 1 || $window >= $currentBounceHeight) return -1;
    $bounceCount = 0;
    while ($currentBounceHeight > $window) {
        $currentBounceHeight *= $bounce;
        if ($currentBounceHeight > $window)
            $bounceCount++;
        $bounceCount++;
    }

    return $bounceCount;
}

// Using this function
echo bouncingBall(3, 0.66, 1.5); // Output: 3