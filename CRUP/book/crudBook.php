<?php

require_once('../conexion.php');

class CrudLibro{
    public function __construct(){
    }
    public function insertar($libro){
        $db=Db::conectar();
        $insert=$db->prepare('INSERT INTO book values(NULL,:nameBook)');
        $insert->bindValue('nameBook',$libro->getNombre());
        $insert->execute();
    }

    public function mostrar()
    {
        $db = Db::conectar();
        $listaLibros = [];
        $select = $db->query('SELECT * FROM book');

        foreach ($select->fetchAll() as $libro) {
            $myLibro = new Libro();
            $myLibro->setId($libro['id']);
            $myLibro->setNombre($libro['nameBook']);
            $listaLibros[] = $myLibro;
        }
        return $listaLibros;
    }

    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM book WHERE ID=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    public function obtenerLibro($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM book WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $libro = $select->fetch();
        $myLibro = new Libro();
        $myLibro->setId($libro['id']);
        $myLibro->setNombre($libro['nameBook']);
        return $myLibro;
    }

    public function actualizar($libro)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE book SET nameBook=:nameBook WHERE ID=:id');
        $actualizar->bindValue('id', $libro->getId());
        $actualizar->bindValue('nameBook', $libro->getNombre());
        $actualizar->execute();
    }
}


?>