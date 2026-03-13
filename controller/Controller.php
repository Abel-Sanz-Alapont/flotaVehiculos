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
        $arrayCoches = $this->gestor->listarCoches(); //devuelve array de objetos
        include "views/listar.php";
    }
    public function agregarCoches()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
                $marca=$_POST['marca'];
                $modelo=$_POST['modelo'];
                $matricula=$_POST['matricula'];
                $precioDia=$_POST['precioDia'];
                $numeroPuertas=$_POST['numeroPuertas'];
                $tipoCombustible=$_POST['tipoCombustible'];

            $nuevoCoche = new Persona(null,$marca,$modelo,$matricula,$precioDia,$numeroPuertas,$tipoCombustible);
            $this->gestor->agregar($nuevoCoche);

            header("Location: index.php");
            exit;
        }


        include "views/agregar.php";
    }
}
