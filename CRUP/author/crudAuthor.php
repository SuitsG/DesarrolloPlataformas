<?php
require_once 'author.php';

class CrudAuthor
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Author $author): bool
    {
        $sql = "INSERT INTO authors (firstName, lastName, address, phone, email, city) VALUES (:firstName, :lastName, :address, :phone, :email, :city)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':firstName', $author->getFirstName());
        $stmt->bindValue(':lastName', $author->getLastName());
        $stmt->bindValue(':address', $author->getAddress());
        $stmt->bindValue(':phone', $author->getPhone());
        $stmt->bindValue(':email', $author->getEmail());
        $stmt->bindValue(':city', $author->getCity());
        return $stmt->execute();
    }

    public function read(int $id): ?Author
    {
        $sql = "SELECT * FROM authors WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Author($row['id'], $row['firstName'], $row['lastName'], $row['address'], $row['phone'], $row['email'], $row['city']);
        }
        return null;
    }

    public function update(Author $author, int $id): bool
    {
        $sql = "UPDATE authors SET firstName = :firstName, lastName = :lastName, address = :address, phone = :phone, email = :email, city = :city WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':firstName', $author->getFirstName());
        $stmt->bindValue(':lastName', $author->getLastName());
        $stmt->bindValue(':address', $author->getAddress());
        $stmt->bindValue(':phone', $author->getPhone());
        $stmt->bindValue(':email', $author->getEmail());
        $stmt->bindValue(':city', $author->getCity());
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM authors WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM authors";
        $stmt = $this->pdo->query($sql);
        $authors = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $author = new Author($row['id'], $row['firstName'], $row['lastName'], $row['address'], $row['phone'], $row['email'], $row['city']);
            $authors[] = $author;
        }
        return $authors;
    }
}
?>