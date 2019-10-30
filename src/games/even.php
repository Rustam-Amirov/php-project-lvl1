<?php

namespace BrainGames\Even;

use function BrainGames\Core\run;

function even()
{ 
    $rule = 'Answer "yes" if number even otherwise answer "no".';
    $game = function () {
        $num = rand(1, 100); 
        $question = "Question: {$num}"; 
        $correctAnswer = ($num % 2 == 0) ? 'yes' : 'no';
        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer
        ];
        
    };
run($game, $rule);
}
