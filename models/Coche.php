<?php

class Coche extends Vehiculo
{

    protected $numeroPuertas;
    protected $tipoCombustible;

    public function __construct($id, $marca, $modelo, $matricula, $precioDia, $numeroPuertas, $tipoCombustible)
    {
        parent::__construct($id, $marca, $modelo, $matricula, $precioDia);

        $this->numeroPuertas = $numeroPuertas;
        $this->tipoCombustible = $tipoCombustible;
    }

    public function calcularAlquiler($dias){

        $precioFinal = parent ::calcularAlquiler($dias);

        if($this->tipoCombustible=="electrico"){
            $precioFinal= $precioFinal*1.05;
        
        }
        return $precioFinal;
    }

}
