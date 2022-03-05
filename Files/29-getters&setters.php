<?php

class Movie {
    public string $title;
    private string $rating;

    function __construct(string $title, string $rating)
    {
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating(): string
    {
        return $this->rating;
    }

    function setRating(string $rating): void
    {
        if ($rating == 'PG' || $rating == 'PG-13'){
            $this->rating = $rating;
        } else {
            $this->rating = 'NR';
        }
    }

}

//Valid Ratings: PG, PG-13, NR
$avengers = new Movie('Avengers Endgame', 'PG-13');

$avengers->setRating('Dog');
echo $avengers->getRating() . PHP_EOL;
