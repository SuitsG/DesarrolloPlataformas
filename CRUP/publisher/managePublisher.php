<?php
require_once('../conexion.php');
require_once('publisher.php');
require_once('crudPublisher.php');

$crud = new CrudPublisher(Db::conectar());
$publisher = new Publisher();

if (isset($_POST['insertar'])) {
    $publisher->setNamePublisher($_POST['namePublisher']);
    $publisher->setFounderPublisher($_POST['founderPublisher']);
    $publisher->setCountryPublisher($_POST['countryPublisher']);
    $crud->create($publisher);
    header('Location: /index.php');
} elseif (isset($_POST['actualizar'])) {
    $publisher->setNamePublisher($_POST['namePublisher']);
    $publisher->setFounderPublisher($_POST['founderPublisher']);
    $publisher->setCountryPublisher($_POST['countryPublisher']);
    $crud->update($publisher, $_POST['id']);
    header('Location: /index.php');
} elseif ($_GET['accion'] == 'e') {
    $crud->delete($_GET['id']);
    header('Location: /index.php');
} elseif ($_GET['accion'] == 'a') {
    header('Location: actualizar.php');
}
?>
