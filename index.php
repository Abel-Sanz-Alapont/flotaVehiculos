<?php
require_once "autoload.php";

$gestor = new GestorPDO();
$controller = new Controller($gestor);

//Consultar datos

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'editarCoches':
        $controller->editar();
        break;
    case 'eliminarCoches':
        $controller->eliminar();
        break;
    case 'agregarCoches':
        $controller->agregarCoches();
        break;
    default:
        $controller->index();
}