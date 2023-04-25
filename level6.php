<?php
/**
 * Pure function:
 * - echo is a side effect. we should return a string
 */

function fizzBuzz(array $range, array $triggers): string
{
    $result = '';
    foreach ($range as $value) {
        $output = '';
        foreach ($triggers as [$text, $callBack]) {
            $output .= call_user_func($callBack, $value) ? $text : ''; // no need isDivisbleBy because it's already DRY
        }
        $output = ($output == '') ? $value : $output;
        $result .= ' ' . $output . ',';
    }
    return $result;
}

echo fizzbuzz(range(1, 100), [
    ['Fizz', function ($value) {
        return $value % 3 == 0;
    }],
    ['Buzz', fn ($value) => $value % 5 == 0],
]);