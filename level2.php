<?php
/**
 * Apply DRY to reduce duplication
 * echo duplicate 4 times
 * $i % 3, $i % 5 duplicate 2 times
 * Benefit:
 * - if want to change output string, we change in one place
 * - if want to change 3, 5 to other number, we change in one place
 */
function fizzBuzz()
{
    for($i = 1; $i <= 100; $i++) {
        $fizz = ($i % 3 == 0);
        $buzz = ($i % 5 == 0);
        if ($fizz && $buzz) {
            $output = ' FizzBuzz,';
        } elseif ($fizz) {
            $output =  ' Fizz,';
        } elseif ($buzz) {
            $output = ' Buzz,';
        } else {
            $output =  ' ' . $i . ',';
        }

        echo $output;
    }
}

fizzBuzz();