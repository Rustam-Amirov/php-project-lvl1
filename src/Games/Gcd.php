<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Core\run;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function gcd()
{
    $getGameData = function () {
        $first = rand(1, 100);
        $second = rand(1, 100);
        $question = $first . ' ' . $second;
        $correctAnswer = calculationGcd($first, $second);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGameData, GAME_RULE);
}

function calculationGcd($first, $second)
{
    $gcd = 1;
    for ($i = 2; $i <= $first; $i++) {
        if ($first % $i == 0 && $second % $i == 0) {
            $gcd = $i;
        }
    }
    return $gcd;
}
