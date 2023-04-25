<?php
/**
 * Apply DRY to reduce duplication
 * text Fizz, Buzz duplicate 2 times
 * pattern $i %  _ == 0 duplicate 2 times
 * Benefit:
 * - if we want to change text Fizz, Buzz, we change one place
 * - code more self-documenting, reader doesn't need to know the meaning of modulo operator %
 */

define('FIZZ', 'Fizz');
define('BUZZ', 'Buzz');

function isDivisibleBy($numerator, $denominator)
{
    return $numerator % $denominator == 0;
}

function fizzBuzz()
{
    for($i = 1; $i <= 100; $i++) {
        $fizz = isDivisibleBy($i, 3);
        $buzz = isDivisibleBy($i, 5);
        if ($fizz && $buzz) {
            $output = ' ' . FIZZ . BUZZ . ',';
        } elseif ($fizz) {
            $output =  ' ' . FIZZ . ',';
        } elseif ($buzz) {
            $output = ' ' . BUZZ . ',';
        } else {
            $output =  ' ' . $i . ',';
        }

        echo $output;
    }
}

fizzBuzz();