<?php

namespace Hexlet\Code\Games\Gcd;

function dataGeneration(string &$question, string &$currentAnswer): void
{
    $numOne = rand(1, 100);
    $numTwo = rand(1, 100);
    $currentAnswer = (string) gcd($numOne, $numTwo);
    $question = $numOne . ' ' . $numTwo;
}

function gcd(int $a, int $b): int
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}
