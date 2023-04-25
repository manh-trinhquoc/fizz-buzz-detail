<?php
/**
 * Parameterization:
 * - custom condition to output text. IE: we wanted to “Zazz” on all numbers less than 10
 */

function fizzBuzz(array $range, array $triggers)
{
    foreach ($range as $value) {
        $output = '';
        foreach ($triggers as [$text, $callBack]) {
            $output .= call_user_func($callBack, $value) ? $text : ''; // no need isDivisbleBy because it's already DRY
        }
        $output = ($output == '') ? $value : $output;
        echo ' ' . $output . ',';
    }
}

fizzbuzz(range(1, 100), [
    ['Fizz', function ($value) {
        return $value % 3 == 0;
    }],
    ['Buzz', fn ($value) => $value % 5 == 0],
]);