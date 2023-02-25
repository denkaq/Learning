<?php

/**
 * Summary of human_readable
 * @param int $seconds
 * @return string
 */
function human_readable(int $seconds): string
{
    return formatTime($seconds / 3600) . ':' . formatTime($seconds / 60 % 60) . ':' . formatTime($seconds % 60);
}

/**
 * Format time
 * @param int $time
 * @return int|string
 */
function formatTime(int $time): int|string
{
    return $time > 9 ? $time : '0' . $time;
}
