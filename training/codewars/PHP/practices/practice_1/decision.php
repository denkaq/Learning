<?php

/**
 * Delete English vowels from string.
 * string $string
 */
function disemvowel(string $string): string
{
    return preg_replace('/[aeiou]/i', '', $string);
}

// Using this function
echo disemvowel('This website is for losers LOL!'); // Output: Ths wbst s fr lsrs LL!