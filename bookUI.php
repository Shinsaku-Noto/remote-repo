<?php

include 'book/book.php';

// object
$book = new Book("Damn", "Kendrick");

echo $book->getAuthor();
echo $book->getTitle();