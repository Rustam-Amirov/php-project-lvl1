<?php

namespace BrainGames\Prime;

use function BrainGames\Core\run;

function prime()
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $game = function () {
        $num = rand(0, 100);
        $question = "Question: {$num}";
        $correctAnswer = isPrime($num);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($game, $rule);
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
