<?php

class Controller
{
    protected $gestor;

    public function __construct($gestor)
    {
        $this->gestor = $gestor;
    }
    public function index()
    {
        $arrayVehiculos = $this->gestor->listarVehiculos(); //devuelve array de objetos
        include "views/listar.php";
    }

    public function tipoVehiculo()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tipo = $_POST['tipoVehiculo'];
            if ($tipo == 'Coche') {
                $this->agregarCoches();
            } elseif ($tipo == 'Motocicleta') {
                $this->agregarMotocicletas();
            }
        }
    }
    public function agregarCoches()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $matricula = $_POST['matricula'];
            $precioDia = $_POST['precioDia'];
            $numeroPuertas = $_POST['numeroPuertas'];
            $tipoCombustible = $_POST['tipoCombustible'];

            $nuevoCoche = new Coche(null, $marca, $modelo, $matricula, $precioDia, $numeroPuertas, $tipoCombustible);
            $this->gestor->agregarCoches($nuevoCoche);

            header("Location: index.php");
            exit;
        }


        include "views/agregar.php";
    }

    public function agregarMotocicletas()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $matricula = $_POST['matricula'];
            $precioDia = $_POST['precioDia'];
            $cilindrada = $_POST['cilindrada'];
            $incluyeCasco = 0;
            if (isset($_POST['incluyeCasco'])) {
                $incluyeCasco = 1;
            }

            $nuevaMotocicleta = new Motocicleta(null, $marca, $modelo, $matricula, $precioDia, $cilindrada, $incluyeCasco);
            $this->gestor->agregarMotocicletas($nuevaMotocicleta);

            header("Location: index.php");
            exit;
        }


        include "views/agregar.php";
    }
    public function editarCoches()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->gestor->editarCoches($_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['matricula'], $_POST['precioDia'], $_POST['numeroPuertas'], $_POST['tipoCombustible']);

            header("Location: index.php");
            exit;
        }
    }
    public function editarMotocicletas()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $incluyeCasco=0;
            if (isset($_POST['incluyeCasco'])) {
                $incluyeCasco=1;
            }
                $this->gestor->editarMotocicletas($_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['matricula'], $_POST['precioDia'], $_POST['incluyeCasco'], $_POST['cilindrada']);

            header("Location: index.php");
            exit;
        }
    }
    public function eliminar()
    {
        $id = $_GET['id'];
        $this->gestor->eliminar($id);

        header("Location: index.php");
        exit;
    }
}
