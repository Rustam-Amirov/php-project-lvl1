<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Core\run;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime()
{
    $getGameData = function () {
        $question = rand(0, 100);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGameData, GAME_RULE);
}

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    if (!isset($answer)) {
        return true;
    }
}
