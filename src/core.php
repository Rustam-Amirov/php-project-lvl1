<?php

namespace BrainGames\Core;

use function cli\line;
use function cli\prompt;
use function BrainGames\Calc\calc;

function run($game, $rule)
{
    line('Welcome to Brain Games!');
    line($rule);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    

    for ($repeate = 3; $repeate > 0; $repeate--) {
        $array = $game();
        line($array['question']);
        $userAnswer = prompt('Your answer');
        $correctAnswer = $array['correctAnswer'];
        if ($userAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            line("%s is wrong answer ;(. Correct answer was %s.", $userAnswer, $correctAnswer);
            return line("Let's try again, %s!", $name);
        }
    }
    line("Congratulations, %s!", $name);
}
