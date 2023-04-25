<?php
/**
 * Parameterization:
 * - the range of integers covered
 * - the output text
 * - the muliples that trigger text to be output
 */

function fizzBuzz(array $range, array $triggers)
{
    foreach ($range as $value) {
        $output = '';
        foreach ($triggers as [$text, $divisor]) {
            $output .= $value % $divisor == 0 ? $text : ''; // no need isDivisbleBy because it's already DRY
        }
        $output = ($output == '') ? $value : $output;
        echo ' ' . $output . ',';
    }
}

fizzbuzz(range(1, 100), [
    ['Fizz', 3],
    ['Buzz', 5],
]);