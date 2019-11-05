<?php

namespace BrainGames\Games\Even;

use function BrainGames\Core\run;

const GAME_RULE = 'Answer "yes" if number even otherwise answer "no".';

function even()
{
    $getGame = function () {
        $num = rand(1, 100);
        $question = "{$num}";
        $correctAnswer = isEven($num);
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGame, GAME_RULE);
}
function isEven($num)
{
    return ($num % 2 == 0) ? 'yes' : 'no';
}