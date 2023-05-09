<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

class Even extends Engine
{
    public function __construct()
    {
        $this->setAsk('Answer "yes" if the number is even, otherwise answer "no".');
    }

    public function dataGeneration(): void
    {
        $number = rand(1, 100);
        $result = $number % 2 === 0 ? 'yes' : 'no';

        $this->setQuestion($number);
        $this->setCurrentAnswer($result);
    }
}
