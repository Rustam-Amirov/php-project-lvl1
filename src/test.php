<?php

namespace Testing\Test;

use function cli\line;
use function cli\prompt;

function testing()
{
    $repeate = 3;
    for ($i = 0; $i < $repeate; $i++) {
        $num = rand(1, 100);
        $correctAnswer = ($num % 2 == 0) ? 'yes' : 'no';
        line("Question: %s", $num);
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            line("%s is wrong answer ;(. Correct answer was %s.", $userAnswer, $correctAnswer);
            return false;
        }
    }
}
