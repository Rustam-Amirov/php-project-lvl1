<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Core\run;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime()
{
    $getGame = function () {
        $num = rand(0, 100);
        $question = "{$num}";
        $correctAnswer = isPrime($num);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGame, GAME_RULE);
}

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $answer = 'no';
        }
    }
    if (!isset($answer)) {
        $answer = 'yes';
    }
    return $answer;
}
