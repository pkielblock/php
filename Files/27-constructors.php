<?php

class Book {
    public string $title;
    public string $author;
    public int $pages;

    public function __construct(string $bookTitle, string $bookAuthor, int $bookPages)
    {
        $this->title = $bookTitle;
        $this->author = $bookAuthor;
        $this->pages = $bookPages;
    }
}

//An object is an instance of a class;
$book1 = new Book('Harry Potter', 'JK Rowling', 200);
$book2 = new Book('Lord Of The Rings', 'Tolkien', 700);

echo $book1->title . PHP_EOL;
echo $book1->author . PHP_EOL;
echo $book1->pages . PHP_EOL;

echo PHP_EOL;

echo $book2->title . PHP_EOL;
echo $book2->author . PHP_EOL;
echo $book2->pages . PHP_EOL;