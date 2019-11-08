<?php

namespace BrainGames\Core;

use function cli\line;
use function cli\prompt;
use function BrainGames\Calc\calc;

const REPLAYOFGAME = 3;

function run($getGameData, $rule)
{
    line('Welcome to Brain Games!');
    line($rule);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 0; $i < REPLAYOFGAME; $i++) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $getGameData();
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer != $correctAnswer) {
            line("%s is wrong answer ;(. Correct answer was %s.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}
