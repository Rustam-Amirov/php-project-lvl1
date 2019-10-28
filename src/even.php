<?php

namespace BrainEven\Even;

use function cli\line;
use function cli\prompt;
use function Testing\Test\testing;

function display()
{
    line('Welcome to Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $resultTest = testing();
    if ($resultTest === false) {
        line("Let's try again, %s!", $name);
    } else {
        line("Congratulations, %s!", $name);
    }
}
