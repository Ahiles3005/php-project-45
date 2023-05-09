<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

class Quest
{
    private string $name;
    private string $message;

    public function hello(): void
    {
        line('Welcome to the Brain Game!');
        $this->name = prompt('May I have your name?');
        line("Hello, %s!", $this->name);
    }

    public function question(): bool
    {
        $number = rand(1, 100);

        line('Answer "yes" if the number is even, otherwise answer "no".');
        line("Question %s", $number);
        $answer = strtolower(prompt('Your answer'));
        $currentAnswer = $this->getCurrentAnswer($number);

        if ($answer === $currentAnswer) {
            $this->message = 'Correct!';
            return true;
        } else {
            $this->message = sprintf("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $currentAnswer);
            return false;
        }
    }

    public function printEndText(): void
    {
        line("Congratulations, %s!", $this->name);
    }

    public function printMessage()
    {
        line($this->message);
    }

    private function getCurrentAnswer(int $number): string
    {
        return $number % 2 === 0 ? 'yes' : 'no';
    }

}

