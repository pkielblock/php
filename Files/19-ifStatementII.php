<?php

function getMaxNumber(int $num1, int $num2): int
{
    if ($num1 > $num2){
        return $num1;
    } else {
        return $num2;
    }
}

echo getMaxNumber(300, 1);