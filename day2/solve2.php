<?php

$win = ['A' => 'Y', 'B' => 'Z', 'C' => 'X'];
$loose = ['A' => 'Z', 'B' => 'X', 'C' => 'Y'];
$points = ['A' => 1, 'B' => 2, 'C' => 3, 'X' => 1, 'Y' => 2, 'Z' => 3];
$sum = 0;

foreach (file(__DIR__ . '/input', FILE_IGNORE_NEW_LINES) as $line) {
    $round = explode(' ', $line);

    $sum += match($round[1]) {
        'Y' => (3 + $points[$round[0]]),
        'X' => $points[$loose[$round[0]]],
        'Z' => (6 + $points[$win[$round[0]]]),
    };
}

var_dump($sum);
