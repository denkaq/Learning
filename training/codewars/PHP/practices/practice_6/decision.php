<?php

/**
 * Summary of likes
 * @param string[] $names
 * @return string
 */
function likes($names)
{
    return formatText($names);
}

/**
 * Summary of formatText
 * @param string[] $names
 * @return string
 */
function formatText($names)
{
    $namesCount = sizeof($names);
    $formats = [
        'no one',
        '%s',
        '%s and %s',
        '%s, %s and %s',
        '%s, %s and ' . ($namesCount - 2) . ' others'
    ];

    return vsprintf($formats[$namesCount > 4 ? 4 : $namesCount], $names) . formatLike($namesCount);
}

/**
 * Summary of formatLike
 * @param string[] $namesCount
 * @return string
 */
function formatLike($namesCount)
{
    return ' like' . ($namesCount < 2 ? 's' : '') . ' this';
}

// Using this function
echo likes(['Alex', 'Jacob', 'Mark', 'Max']); // Output: Alex, Jacob and 2 others like this