<?php
/**
 * Format phone array to (111) 111-11111
 * @param int[] $numbersArray
 * @return string
 */
function createPhoneNumber(array $numbersArray): string
{
    return vsprintf('(%d%d%d) %d%d%d-%d%d%d%d', $numbersArray);
}

// Using this function
echo createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]); // Output: (123) 456-7890