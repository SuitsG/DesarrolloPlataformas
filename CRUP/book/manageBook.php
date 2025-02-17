<?php
require_once('../conexion.php');
require_once('book.php');
require_once('crudBook.php');

$crud = new CrudBook(Db::conectar());
$book = new Book();

if (isset($_POST['insertar'])) {
    $book->setNameBook($_POST['nameBook']);
    $book->setAuthorId($_POST['authorId']);
    $book->setPublisherId($_POST['publisherId']);
    $crud->create($book);
    header('Location: /index.php');
} elseif (isset($_POST['actualizar'])) {
    $book->setNameBook($_POST['nameBook']);
    $book->setAuthorId($_POST['authorId']);
    $book->setPublisherId($_POST['publisherId']);
    $crud->update($book, $_POST['id']);
    header('Location: /index.php');
} elseif (isset($_GET['accion']) && $_GET['accion'] == 'e') {
    $crud->delete($_GET['id']);
    header('Location: /index.php');
} elseif (isset($_GET['accion']) && $_GET['accion'] == 'a') {
    header('Location: actualizar.php');
}

?>