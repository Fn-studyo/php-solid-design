<?php

class EBookReader {

    private $book;

    function __construct(EbookInterface $book) {
        $this->book = $book;
    }

    function read() {
        return $this->book->read();
    }

}