<?php

$count = 0;

function range_contain(array $needle, array $haystack): bool
{
    return max($needle) <= max($haystack) && min($needle) >= min($haystack);
}

foreach (file(__DIR__ . '/input', FILE_IGNORE_NEW_LINES) as $line) {
    $pair = array_map(
        fn ($range) => array_map(fn ($k) => (int)$k, explode('-', $range)),
        explode(',', $line)
    );

    if (range_contain($pair[0], $pair[1]) || range_contain($pair[1], $pair[0])) {
        $count++;
    }
}

var_dump($count);
