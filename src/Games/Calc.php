<?php

namespace Hexlet\Code\Games\Calc;

function dataGeneration(string &$question, string &$currentAnswer): void
{
    $mathOperation = [
        '-',
        '+',
        '*'
    ];

    $randomKey = array_rand($mathOperation, 1);
    $operation = $mathOperation[$randomKey];


    $numOne = rand(1, 10);
    $numTwo = rand(1, 10);
    $result = 0;
    switch ($operation) {
        case '-':
            $result = $numOne - $numTwo;
            break;
        case '+':
            $result = $numOne + $numTwo;
            break;
        case '*':
            $result = $numOne * $numTwo;
            break;
    }
    $question = $numOne . ' ' . $operation . ' ' . $numTwo;
    $currentAnswer = (string)$result;
}
