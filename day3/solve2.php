<?php

$total = 0;
$slots = [];

$i = 0;
foreach (file(__DIR__ . '/input', FILE_IGNORE_NEW_LINES) as $line) {
    $slots[] = str_split($line);
    $i++;

    if ($i % 3 === 0) {
        $same = array_values(array_intersect(...$slots));
        $total += $same[0] === strtolower($same[0]) ? ord($same[0]) - 96 : (ord($same[0]) - 64) + 26;
        $slots = [];
    }
}

var_dump($total);
