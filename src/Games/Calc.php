<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

class Calc extends Engine
{
    private array $mathOperation = [
        '-',
        '+',
        '*'
    ];


    public function __construct()
    {
        $this->setAsk('What is the result of the expression?');
    }

    public function dataGeneration(): void
    {
        $operation = $this->getRandomOperation();
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

        $this->setQuestion($numOne . ' ' . $operation . ' ' . $numTwo);
        $this->setCurrentAnswer((string)$result);
    }


    private function getRandomOperation(): string
    {
        $randomKey = array_rand($this->mathOperation, 1);
        return $this->mathOperation[$randomKey];
    }
}
