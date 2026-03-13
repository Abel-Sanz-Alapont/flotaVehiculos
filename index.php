<?php
require_once "autoload.php";

$gestor = new GestorPDO();
$controller = new Controller($gestor);

//Consultar datos

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'editarCoches':
        $controller->editarCoches();
        break;
    case 'agregarCoches':
        $controller->agregarCoches();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    default:
        $controller->index();
}
