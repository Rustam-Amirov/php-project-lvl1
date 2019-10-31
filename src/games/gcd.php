<?php

namespace BrainGames\Gcd;

use function BrainGames\Core\run;

function gcd()
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $game = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $question = "Question: {$firstNum} {$secondNum}";
        $correctAnswer = calculationCorrectAnswer($firstNum, $secondNum);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($game, $rule);
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
