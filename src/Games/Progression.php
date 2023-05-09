<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

class Progression extends Engine
{
    public function __construct()
    {
        $this->setAsk('What number is missing in the progression?');
    }

    public function dataGeneration(): void
    {
        $jumpStep = rand(2, 5);
        $lengthElement = $jumpStep * rand(5, 20);

        $elements = [];

        for ($i = $jumpStep; $i <= $lengthElement; $i += $jumpStep) {
            $elements[] = $i;
        }

        $randKey = array_rand($elements);
        $result = $elements[$randKey];
        $elements[$randKey] = '..';
        $this->setQuestion(implode(' ', $elements));
        $this->setCurrentAnswer($result);
    }
}
