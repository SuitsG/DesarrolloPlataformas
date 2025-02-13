<?php
require_once('../author/author.php');
require_once('../author/crudAuthor.php');

$crud = new CrudAuthor();
$author = new Author();



if (isset($_POST['insertar'])) {
    $author->setFirstName($_POST['firstName']);
    $author->setLastName($_POST['lastName']);
    $author->setAddress($_POST['address']);
    $author->setPhone($_POST['phone']);
    $author->setEmail($_POST['email']);
    $author->setCity($_POST['city']);
    $crud->insertar($author);
    header('Location: /index.php');
} elseif (isset($_POST['actualizar'])) {
    $author->setId($_POST['id']);
    $author->setFirstName($_POST['nombre']);
    $crud->actualizar($author);
    header('Location: /index.php');
} elseif ($_GET['accion'] == 'e') {
    $crud->eliminar($_GET['id']);
    header('Location: /index.php');
} elseif ($_GET['accion'] == 'a') {
    header('Location: actualizar.php');
}
