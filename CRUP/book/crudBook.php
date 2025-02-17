<?php
require_once 'book.php';

class CrudBook
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Book $book): bool
    {
        $sql = "INSERT INTO books (nameBook, authorId, publisherId) VALUES (:nameBook, :authorId, :publisherId)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nameBook', $book->getNameBook());
        $stmt->bindValue(':authorId', $book->getAuthorId());
        $stmt->bindValue(':publisherId', $book->getPublisherId());
        return $stmt->execute();
    }

    public function read(int $id): ?Book
    {
        $sql = "SELECT * FROM books WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Book($row['id'], $row['nameBook'], $row['authorId'], $row['publisherId']);
        }
        return null;
    }

    public function update(Book $book, int $id): bool
    {
        $sql = "UPDATE books SET nameBook = :nameBook, authorId = :authorId, publisherId = :publisherId WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nameBook', $book->getNameBook());
        $stmt->bindValue(':authorId', $book->getAuthorId());
        $stmt->bindValue(':publisherId', $book->getPublisherId());
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getAuthors(): array
    {
        $sql = "SELECT id, firstName, lastName FROM authors";
        $stmt = $this->pdo->query($sql);
        $authors = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $authors[] = [
                'id' => $row['id'],
                'name' => $row['firstName'] . ' ' . $row['lastName']
            ];
        }
        return $authors;
    }

    public function getPublishers(): array
    {
        $sql = "SELECT id, namePublisher FROM publishers";
        $stmt = $this->pdo->query($sql);
        $publishers = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $publishers[] = [
                'id' => $row['id'],
                'name' => $row['namePublisher']
            ];
        }
        return $publishers;
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM books WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM books";
        $stmt = $this->pdo->query($sql);
        $books = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $books[] = new Book($row['id'], $row['nameBook'], $row['authorId'], $row['publisherId']);
        }
        return $books;
    }

    public function getBooksWithDetails(): array
    {
        $sql = "SELECT books.id, books.nameBook, authors.firstName, authors.lastName, publishers.namePublisher 
                FROM books 
                JOIN authors ON books.authorId = authors.id 
                JOIN publishers ON books.publisherId = publishers.id";
        $stmt = $this->pdo->query($sql);
        $books = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $books[] = [
                'id' => $row['id'],
                'nameBook' => $row['nameBook'],
                'authorName' => $row['firstName'] . ' ' . $row['lastName'],
                'publisherName' => $row['namePublisher']
            ];
        }
        return $books;
    }
}
?>
