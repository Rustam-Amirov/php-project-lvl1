<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Core\run;

const GAME_RULE = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;
function progression()
{
    $getGameData = function () {
        $progression = makeProgression();
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
function makeProgression()
{
    $start = rand(1, 100);
    $progression = [];
    $interval = rand(1, 10);
    $makeProgress = function ($progression, $start) use (&$makeProgress, $interval) {
        $nextNumberInProgression = $start + $interval;
        $progression[] = $nextNumberInProgression;
        if (sizeof($progression) == PROGRESSION_LENGTH) {
            return $progression;
        } else {
            return $makeProgress($progression, $nextNumberInProgression);
        }
    };
    return $makeProgress($progression, $start);
}
