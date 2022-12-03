<?php

$win = ['A' => 'Y', 'B' => 'Z', 'C' => 'X'];
$loose = ['A' => 'Z', 'B' => 'X', 'C' => 'Y'];
$points = ['X' => 1, 'Y' => 2, 'Z' => 3];
$sum = 0;

foreach (file(__DIR__ . '/input', FILE_IGNORE_NEW_LINES) as $line) {
    $round = explode(' ', $line);

    $sum += $points[$round[1]] + match($round[1]) {
        $win[$round[0]] => 6,
        $loose[$round[0]] => 0,
        default => 3
    };
}

var_dump($sum);
