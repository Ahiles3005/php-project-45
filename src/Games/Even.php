<?php

namespace Hexlet\Code\Games\Even;

function dataGeneration(string &$question, string &$currentAnswer): void
{
    $number = rand(1, 100);
    $result = $number % 2 === 0 ? 'yes' : 'no';

    $question = $number;
    $currentAnswer = $result;
}
