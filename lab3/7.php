<?php

function printStringReturnNumber()
{
    echo "Строка из функции -_-\n";
    return 666;
}

$devil_num = printStringReturnNumber();
echo "return: $devil_num\n";
