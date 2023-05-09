<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

class Engine
{
    private string $name;
    protected string $currentAnswer;
    private string $answer;
    protected string $question;
    protected string $textAsk;

    public function hello(): void
    {
        line('Welcome to the Brain Game!');
        $this->name = prompt('May I have your name?');
        line("Hello, %s!", $this->name);
    }

    public function question(): bool
    {
        $this->getAskText();
        $this->answer = $this->getUserAnswer();

        if ($this->validation()) {
            return true;
        } else {
            return false;
        }
    }

    public function printEndText(): void
    {
        line("Congratulations, %s!", $this->name);
    }

    public function printValidaMessage(): void
    {
        line('Correct!');
    }

    public function printInValidaMessage(): void
    {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $this->answer, $this->currentAnswer);
        line("Let's try again, '%s'!", $this->name);
    }

    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    public function setCurrentAnswer(string $currentAnswer): void
    {
        $this->currentAnswer = $currentAnswer;
    }

    public function setAsk(string $textAsk): void
    {
        $this->textAsk = $textAsk;
    }

    protected function validation(): string
    {
        return $this->answer === $this->currentAnswer;
    }

    private function getUserAnswer(): string
    {
        return strtolower(prompt('Your answer'));
    }

    private function getAskText()
    {
        line($this->textAsk);
        line("Question: %s", $this->question);
    }
}
