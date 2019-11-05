<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Core\run;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function gcd()
{
    $getGame = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $question = "{$firstNum} {$secondNum}";
        $correctAnswer = calculationCorrectAnswer($firstNum, $secondNum);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGame, GAME_RULE);
}

function calculationCorrectAnswer($firstNum, $secondNum)
{
    $correctAnswer = 1;
    for ($i = 2; $i <= $firstNum; $i++) {
        if ($firstNum % $i == 0 && $secondNum % $i == 0) {
            $correctAnswer = $i;
        }
    }
    return $correctAnswer;
}
