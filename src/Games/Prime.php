<?php

namespace Hexlet\Code\Games\Prime;

function dataGeneration(string &$question, string &$currentAnswer): void
{
    $question = rand(1, 100);
    $currentAnswer = isSimple($question);
}

function isSimple(int $a): string
{
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}
