<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Core\run;

const GAME_RULE = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;
function progression()
{
    $getGameData = function () {
        $progression = makeProgression();
        $randomNum = rand(0, 9);
        $correctAnswer = $progression[$randomNum];
        $progression[$randomNum] = '..';
        $stringProgression = implode(' ', $progression);
        $question = "{$stringProgression}";
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($getGameData, GAME_RULE);
}
function makeProgression()
{
    $next = rand(1, 100);
    $progression = [];
    $interval = rand(1, 10);
    $makeProgress = function ($progression, $next) use (&$makeProgress, $interval) {
        $next = $next + $interval;
        $progression[] = $next;
        if (sizeof($progression) == PROGRESSION_LENGTH) {
            return $progression;
        } else {
            return $makeProgress($progression, $next);
        }
    };
    return $makeProgress($progression, $next);
}
