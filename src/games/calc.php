<?php

namespace BrainGames\Calc;

use function BrainGames\Core\run;

function calc()
{
    $rule = 'What is the result of the expression?';
    $game = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 10);
        $operators = ['+', '-', '*'];
        $randOpearator = $operators[rand(0, count($operators) - 1)];
        $question = "Question: {$firstNum} {$randOpearator} {$secondNum}";
        $correctAnswer = calculationCorrectAnswer($randOpearator, $firstNum, $secondNum);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($game, $rule);
}

function calculationCorrectAnswer($randOpearator, $firstNum, $secondNum)
{
        
    switch ($randOpearator) {
        case '+':
            return $firstNum + $secondNum;
            break;
        case '-':
            return $firstNum - $secondNum;
            break;
        case '*':
            return $firstNum * $secondNum;
            break;
    }
}
