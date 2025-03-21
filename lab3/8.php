<?php

function increaseEnthusiasm($str)
{
    return $str . '!';
}

echo increaseEnthusiasm('Hell yeah') . "\n";

function repeatThreeTimes($str)
{
    return $str . $str . $str;
}

echo repeatThreeTimes('Repeat') . "\n";

echo increaseEnthusiasm(repeatThreeTimes('Рекурсия ')) . "\n";

function cut($str, $length = 10)
{
    return substr($str, 0, $length);
}

echo cut('long string', 5) , "\n";
echo cut('long string') , "\n";

function printArrayRecursively($array, $index = 0)
{
    if ($index < count($array)) {
        echo $array[$index] , "\n";
        printArrayRecursively($array, $index + 1);
    }
}

$numbers = [1, 2, 3, 4, 5, 13, 666];
printArrayRecursively($numbers);

function sumDigits($number)
{
    while ($number > 9) {
        $number = array_sum(str_split((string) $number));
    }
    return $number;
}

$number = 12345;
echo "Сумма цифр числа $number: ", sumDigits($number), "\n";
