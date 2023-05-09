<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

class Gcd extends Engine
{
    public function __construct()
    {
        $this->setAsk('Find the greatest common divisor of given numbers.');
    }

    public function dataGeneration(): void
    {
        $numOne = rand(1, 100);
        $numTwo = rand(1, 100);
        $result = $this->gcd($numOne, $numTwo);

        $this->setQuestion($numOne . ' ' . $numTwo);
        $this->setCurrentAnswer($result);
    }

    private function gcd(int $a, int $b): int
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
}
