<?php

namespace BrainGames\Calc;

use function BrainGames\Core\run;

function calc()
{
    $rule = 'What is the result of the expression?';
    $game = function () {
        $num1 = rand(1, 100);
        $num2 = rand(1, 10);
        $operators = ['+', '-', '*'];
        $randOpearator = $operators[rand(0, count($operators) - 1)];
        $question = "Question: {$num1} {$randOpearator} {$num2}";
        $correctAnswer = calculationCorrectAnswer($randOpearator, $num1, $num2);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };

    function calculationCorrectAnswer($randOpearator, $num1, $num2)
    {
        switch ($randOpearator) {
            case '+':
                return $num1 + $num2;
                break;
            case '-':
                return $num1 - $num2;
                break;
            case '*':
                return $num1 * $num2;
                break;
        }
    }
    run($game, $rule);
}
