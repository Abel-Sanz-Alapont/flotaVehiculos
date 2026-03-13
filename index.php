<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "autoload.php";

$gestor = new GestorPDO();
$controller = new Controller($gestor);

//Consultar datos

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'editarCoche':
        $controller->editar();
        break;
    case 'editarMoto':
        $controller->editar();
        break;
    /*case 'eliminarCoche':
        $controller->eliminar();
        break;
    case 'eliminarMoto':
        $controller->eliminar();
        break;
    case 'agregarCoche':
        $controller->agregar();
        break;
    case 'agregarMoto':
        $controller->agregar();
        break;*/


    default:
        $controller->index();
}
