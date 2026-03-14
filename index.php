<?php
require_once "autoload.php";

$gestor = new GestorPDO();
$controller = new Controller($gestor);

//Consultar datos

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'guardarVehiculo':
        $controller->tipoVehiculo();
        break;
    case 'editarCoches':
        $controller->editarCoches();
        break;
    case 'editarMotocicletas':
        $controller->editarMotocicletas();
        break;
    case 'agregarCoches':
        $controller->agregarCoches();
        break;
    case 'agregarMotocicleta':
        $controller->agregarMotocicletas();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    default:
        $controller->index();
}
