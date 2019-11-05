<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Core\run;

const GAME_RULE = 'What is the result of the expression?';

function calc()
{
    $getGame = function () {
        $first = rand(1, 100);
        $second = rand(1, 10);
        $operators = ['+', '-', '*'];
        $randOpearator = $operators[rand(0, 2)];
        $question = "{$first} {$randOpearator} {$second}";
        $correctAnswer = calculationCorrectAnswer($randOpearator, $first, $second);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGame, GAME_RULE);
}

function calculationCorrectAnswer($randOpearator, $first, $second)
{
        
    switch ($randOpearator) {
        case '+':
            return $first + $second;
            break;
        case '-':
            return $first - $second;
            break;
        case '*':
            return $first * $second;
            break;
    }
}
