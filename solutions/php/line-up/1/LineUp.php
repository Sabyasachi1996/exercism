<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

declare(strict_types=1);

function format(string $name, int $number): string
{
    $number_array =str_split((string)$number);
    $last_digit = $number_array[count($number_array)-1];
    $second_last_digit = $number_array[count($number_array)-2];
    $last_two_digits = $second_last_digit.$last_digit;
    $ordinal = "";
    if($last_digit == '1' && (string)$last_two_digits != '11'){
        $ordinal = "st";
    }elseif($last_digit == '2' && (string)$last_two_digits != '12'){
        $ordinal = "nd";
    }elseif($last_digit == '3' && (string)$last_two_digits != '13'){
        $ordinal = "rd";
    }else{
        $ordinal = "th";
    }
    return "$name, you are the $number$ordinal customer we serve today. Thank you!";
}
