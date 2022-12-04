<?php

$count = 0;

function range_overlap(array $needle, array $haystack): bool
{
    return max($needle) >= min($haystack) && min($needle) <= min($haystack)
        || min($needle) <= max($haystack) && max($needle) >= max($haystack);
}

foreach (file(__DIR__ . '/input', FILE_IGNORE_NEW_LINES) as $line) {
    $pair = array_map(
        fn ($range) => array_map(fn ($k) => (int)$k, explode('-', $range)),
        explode(',', $line)
    );

    if (range_overlap($pair[0], $pair[1]) || range_overlap($pair[1], $pair[0])) {
        $count++;
    }
}

var_dump($count);
