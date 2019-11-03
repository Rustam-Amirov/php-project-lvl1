<?php

namespace BrainGames\Progression;

use function BrainGames\Core\run;

function progression()
{
    $rule = 'What number is missing in the progression?';
    $game = function () {
        $progression = makeProgression();
        $randomNum = rand(0, 9);
        $correctAnswer = $progression[$randomNum];
        $progression[$randomNum] = '..';
        $stringProgression = implode(' ', $progression);
        $question = "Question: {$stringProgression}";
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
    };
    run($game, $rule);
}
function makeProgression()
{
    $next = rand(1, 100);
    $progression = [];
    $interval = rand(1, 10);
    $makeProgress = function ($progression, $next) use (&$makeProgress, $interval) {
        $next = $next + $interval;
        $progression[] = $next;
        if (sizeof($progression) == 10) {
            return $progression;
        } else {
            return $makeProgress($progression, $next);
        }
    };
    return $makeProgress($progression, $next);
}
