<?php

/**
 * Summary of bouncingBall.
 * @param float $currentBounceHeight
 * @param float $bounce
 * @param float $window
 * @return int
 */
function bouncingBall(float $h, float $bounce, float $window): int {
    if($h <= 0 || $window <= 0 || $h <= $window || $bounce >= 1 || $bounce <= 0) {
      return -1;
    }
    
    return bouncingBall($h * $bounce, $bounce, $window) + 2;
  }

// Using this function
echo bouncingBall(3, 0.66, 1.5); // Output: 3