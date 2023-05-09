<?php

namespace Hexlet\Code\Games;

use Hexlet\Code\Engine;

class Prime extends Engine
{
    public function __construct()
    {
        $this->setAsk('Answer "yes" if given number is prime. Otherwise answer "no".');
    }

    public function dataGeneration(): void
    {
        $num = rand(1, 100);
        $result = $this->isSimple($num);

        $this->setQuestion($num);
        $this->setCurrentAnswer($result);
    }


    private function isSimple(int $a): string
    {
        for ($i = 2; $i < $a; $i++) {
            if ($a % $i == 0) {
                return 'no';
            }
        }
        return 'yes';
    }
}
