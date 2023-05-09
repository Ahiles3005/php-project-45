<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getName(string &$name): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function printEndText(string $name): void
{
    line("Congratulations, %s!", $name);
}


function printValidaMessage(): void
{
    line('Correct!');
}

function printInValidaMessage(string $name, string $answer, string $currentAnswer): void
{
    line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $currentAnswer);
    line("Let's try again, %s!", $name);
}


function getAskText(string $textAsk, string $question): void
{
    line($textAsk);
    line("Question: %s", $question);
}

function getUserAnswer(): string
{
    return prompt('Your answer');
}
