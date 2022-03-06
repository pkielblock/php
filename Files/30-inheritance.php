<?php

class Chef {
    public function makeChicken(): void
    {
        echo 'The chef makes chicken' . PHP_EOL;
    }

    public function makeSalad(): void
    {
        echo 'The chef makes salad' . PHP_EOL;
    }

    public function makeSpecialDish(): void
    {
        echo 'The chef makes stroganoff' . PHP_EOL;
    }
}

class ItalianChef extends Chef {
    public function makePasta(): void
    {
        echo 'The chef makes pasta' . PHP_EOL;
    }
    public function makeSpecialDish(): void
    {
        echo 'The chef makes bread' . PHP_EOL;
    }
}

$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new ItalianChef();
$italianChef->makeSalad();
$italianChef->makeSpecialDish();


