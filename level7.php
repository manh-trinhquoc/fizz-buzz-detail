<?php
/**
 * Lazy generation:
 * - return string may be get too big to handle, IE: few terabytes. withdraw $output for 1 number each time
 */

function fizzBuzz(array $range, array $triggers)
{
    foreach ($range as $value) {
        $output = '';
        foreach ($triggers as [$text, $callBack]) {
            $output .= call_user_func($callBack, $value) ? $text : ''; // no need isDivisbleBy because it's already DRY
        }
        $output = ($output == '') ? $value : $output;
        yield $output;
    }
}

foreach(fizzbuzz(range(1, 100), [
    ['Fizz', function ($value) {
        return $value % 3 == 0;
    }],
    ['Buzz', fn ($value) => $value % 5 == 0],
]) as $output) {
    echo ' ' . $output . ',';
};