<?php

class Book {
    public string $title;
    public string $author;
    public int $pages;
}

//An object is an instance of a class;
$book = new Book();

$book->title = 'Harry Potter';
$book->author = 'JK Rowling';
$book->pages = 400;

echo $book->title . PHP_EOL;
echo $book->author . PHP_EOL;
echo $book->pages . PHP_EOL;

echo PHP_EOL;

$book2 = new Book();

$book2->title = 'Lord Of The Rings';
$book2->author = 'Tolkien';
$book2->pages = 700;

echo $book2->title . PHP_EOL;
echo $book2->author . PHP_EOL;
echo $book2->pages . PHP_EOL;