<?php

/**
 * Count English vowels in string
 * string $str
 * return int
 */
function getCount(string $str): int
{
    return preg_match_all('/[aeiou]/i', $str);
}


// Using this function
echo getCount('This website is for losers LOL!'); // Output: 9