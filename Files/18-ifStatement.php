<?php

$isMale = true;
$isTall = false;

if ($isMale && $isTall){
    echo 'You are a tall male';
} elseif ($isMale && !$isTall){
    echo 'You are a short male';
} elseif (!$isMale && $isTall){
    echo 'You are a tall female';
} else {
    echo 'You are a short female';
}