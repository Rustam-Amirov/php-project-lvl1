<?php

namespace BrainGames\Core;

use function cli\line;
use function cli\prompt;
use function BrainGames\Calc\calc;

function run($getGame, $rule)
{
    line('Welcome to Brain Games!');
    line($rule);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $replaysOfGame = 3;

    for ($replaysOfGame = 3; $replaysOfGame > 0; $replaysOfGame--) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $getGame();
        line("Question: {$question}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer != $correctAnswer) {
            line("%s is wrong answer ;(. Correct answer was %s.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, %s!", $name);
}
