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
        $arrayCoches = $this->gestor->listarCoche(); //devuelve array de objetos

        include "views/listar.php";
    }

}
