<?php

function cubeNumber(int $num): int
{
    return $num * $num * $num;
}

$cubeResult = cubeNumber(4);
echo $cubeResult;