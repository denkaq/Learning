<?php

/**
 * Convert binary array to number
 * @param array $arr
 * @return float|int
 */
function binaryArrayToNumber(array $arr): float|int
{
    return bindec(implode("", $arr));
}

// Using this function
echo binaryArrayToNumber([0, 0, 0, 1]); // Output: 1