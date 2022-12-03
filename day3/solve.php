<?php

$total = 0;

foreach (file(__DIR__ . '/input', FILE_IGNORE_NEW_LINES) as $line) {
    $rack = str_split($line, strlen($line)/2);
    $sames = array_values(array_intersect(str_split($rack[0]), str_split($rack[1])));

    $total += $sames[0] === strtolower($sames[0])
        ? ord($sames[0]) - 96 // lowercase
        : (ord($sames[0]) - 64) + 26; // uppercase
}

var_dump($total);
