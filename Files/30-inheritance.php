<?php

class Chef {
    function makeChicken(): void
    {
        echo 'The chef makes chicken' . PHP_EOL;
    }

    function makeSalad(): void
    {
        echo 'The chef makes salad' . PHP_EOL;
    }

    function makeSpecialDish(): void
    {
        echo 'The chef makes stroganoff' . PHP_EOL;
    }
}

class ItalianChef extends Chef {
    function makePasta(): void
    {
        echo 'The chef makes pasta' . PHP_EOL;
    }
    function makeSpecialDish(): void
    {
        echo 'The chef makes bread' . PHP_EOL;
    }
}

$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new ItalianChef();
$italianChef->makeSalad();
$italianChef->makeSpecialDish();


