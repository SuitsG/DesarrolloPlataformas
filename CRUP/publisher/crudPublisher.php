<?php
require_once 'publisher.php';

class CrudPublisher
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Publisher $publisher): bool
    {
        $sql = "INSERT INTO publishers (namePublisher, founderPublisher, countryPublisher) VALUES (:namePublisher, :founderPublisher, :countryPublisher)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':namePublisher', $publisher->getNamePublisher());
        $stmt->bindValue(':founderPublisher', $publisher->getFounderPublisher());
        $stmt->bindValue(':countryPublisher', $publisher->getCountryPublisher());
        return $stmt->execute();
    }

    public function read(int $id): ?Publisher
    {
        $sql = "SELECT * FROM publishers WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Publisher($row['namePublisher'], $row['founderPublisher'], $row['countryPublisher']);
        }
        return null;
    }

    public function update(Publisher $publisher, int $id): bool
    {
        $sql = "UPDATE publishers SET namePublisher = :namePublisher, founderPublisher = :founderPublisher, countryPublisher = :countryPublisher WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':namePublisher', $publisher->getNamePublisher());
        $stmt->bindValue(':founderPublisher', $publisher->getFounderPublisher());
        $stmt->bindValue(':countryPublisher', $publisher->getCountryPublisher());
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM publishers WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM publishers";
        $stmt = $this->pdo->query($sql);
        $publishers = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $publisher = new Publisher($row['id'], $row['namePublisher'], $row['founderPublisher'], $row['countryPublisher']);
            $publishers[] = $publisher;
        }
        return $publishers;
    }
}
