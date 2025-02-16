<?php

class Book
{
    private int $id;
    private string $nameBook;
    private int $authorId;
    private int $publisherId;

    function __construct(int $id = 0, string $nameBook = '', int $authorId = 0, int $publisherId = 0)
    {
        $this->id = $id;
        $this->nameBook = $nameBook;
        $this->authorId = $authorId;
        $this->publisherId = $publisherId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNameBook(): string
    {
        return $this->nameBook;
    }

    public function setNameBook(string $nameBook): void
    {
        $this->nameBook = $nameBook;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function getPublisherId(): int
    {
        return $this->publisherId;
    }

    public function setPublisherId(int $publisherId): void
    {
        $this->publisherId = $publisherId;
    }
}
?>