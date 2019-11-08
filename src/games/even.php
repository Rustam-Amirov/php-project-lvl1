<?php

namespace BrainGames\Games\Even;

use function BrainGames\Core\run;

const GAME_RULE = 'Answer "yes" if number even otherwise answer "no".';

function even()
{
    $getGameData = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($num) ? 'yes' : 'no';
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGameData, GAME_RULE);
}
function isEven($num)
{
    return ($num % 2 == 0);
}
