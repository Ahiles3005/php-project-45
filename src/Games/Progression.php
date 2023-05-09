<?php

namespace Hexlet\Code\Games\Progressions;

function dataGeneration(string &$question, string &$currentAnswer): void
{
    $jumpStep = rand(2, 5);
    $lengthElement = $jumpStep * rand(5, 20);

    $elements = [];

    for ($i = $jumpStep; $i <= $lengthElement; $i += $jumpStep) {
        $elements[] = $i;
    }

    $randKey = array_rand($elements);
    $currentAnswer = $elements[$randKey];
    $elements[$randKey] = '..';
    $question = implode(' ', $elements);
}
