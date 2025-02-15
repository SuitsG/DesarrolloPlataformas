<?php

require_once('../conexion.php');


class CrudAuthor
{
    public function __construct() {}

    public function insertar($author)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO authors (firstName, lastName, address, phone, email, city) VALUES (:firstName, :lastName, :address, :phone, :email, :city)');
        $insert->bindValue('firstName', $author->getFirstName());
        $insert->bindValue('lastName', $author->getLastName());
        $insert->bindValue('address', $author->getAddress());
        $insert->bindValue('phone', $author->getPhone());
        $insert->bindValue('email', $author->getEmail());
        $insert->bindValue('city', $author->getCity());
        $insert->execute();
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listaAuthors = [];
        $select = $db->query('SELECT * FROM authors');

        foreach ($select->fetchAll() as $author) {
            $myAuthor = new Author();
            $myAuthor->setId($author['id']);
            $myAuthor->setFirstName($author['firstName']);
            $myAuthor->setLastName($author['lastName']);
            $myAuthor->setAddress($author['address']);
            $myAuthor->setPhone($author['phone']);
            $myAuthor->setEmail($author['email']);
            $myAuthor->setCity($author['city']);
            $listaAuthors[] = $myAuthor;
        }
        return $listaAuthors;
    }

    public function obtenerTodosLosAutores()
    {
        $db = Db::conectar();
        $select = $db->query('SELECT id, firstName FROM authors');
        $listaAuthors = $select->fetchAll();
        return $listaAuthors;
    }

    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM authors WHERE  id=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    public function obtenerAuthor($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM authors WHERE id=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $author = $select->fetch();
        $myAuthor = new Author();
        $myAuthor->setId($author['id']);
        $myAuthor->setFirstName($author['firstName']);
        $myAuthor->setLastName($author['lastName']);
        $myAuthor->setAddress($author['address']);
        $myAuthor->setPhone($author['phone']);
        $myAuthor->setEmail($author['email']);
        $myAuthor->setCity($author['city']);
        return $myAuthor;
    }

    public function actualizar($author)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE authors SET firstName=:firstName, lastName=:lastName, address=:address, phone=:phone, email=:email, city=:city WHERE id=:id');
        $actualizar->bindValue('id', $author->getId());
        $actualizar->bindValue('firstName', $author->getFirstName());
        $actualizar->bindValue('lastName', $author->getLastName());
        $actualizar->bindValue('address', $author->getAddress());
        $actualizar->bindValue('phone', $author->getPhone());
        $actualizar->bindValue('email', $author->getEmail());
        $actualizar->bindValue('city', $author->getCity());
        $actualizar->execute();
    }
    
}
?>