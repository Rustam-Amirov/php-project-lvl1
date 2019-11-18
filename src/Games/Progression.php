<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Core\run;

const GAME_RULE = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;
function progression()
{
    $getGameData = function () {
        $start = rand(1, 100);
        $interval = rand(1, 10);
        $progression = makeProgression($start, $interval);
        $hiddenIndexNumberInProgression = rand(0, PROGRESSION_LENGTH - 1);
        $correctAnswer = $progression[$hiddenIndexNumberInProgression];
        $progression[$hiddenIndexNumberInProgression] = '..';
        $stringProgression = implode(' ', $progression);
        return [
            'question' => $stringProgression,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGameData, GAME_RULE);
}

function makeProgression($start, $interval)
{
    $progression = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $progression[] = $start + $interval * $i;
    }
    return $progression;
}
