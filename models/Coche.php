<?php

class Coche extends Vehiculo
{

    protected $numeroPuertas;
    protected $tipoCombustible;

    public function __construct($id, $marca, $modelo, $matricula, $precioDia, $numeroPuertas, $tipoCombustible)
    {
        return parent::__construct($id, $marca, $modelo, $matricula, $precioDia);

        $this->numeroPuertas = $numeroPuertas;
        $this->tipoCombustible = $tipoCombustible;
    }

    
}
