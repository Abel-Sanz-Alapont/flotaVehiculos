<?php

class Motocicleta extends Vehiculo{

    protected $cilindrada;
    protected $incluyeCasco;

    public function __construct($id, $marca, $modelo, $matricula, $precioDia,$cilindrada,$incluyeCasco)
    {
        parent::__construct($id, $marca, $modelo, $matricula, $precioDia);
        
        $this->cilindrada=$cilindrada;
        $this->incluyeCasco=$incluyeCasco;
    }

    public function calcularAlquiler($dias)
    {
        $precioFinal= parent::calcularAlquiler($dias);

        $this->incluyeCasco=true;

        if($this->incluyeCasco){
            $precioFinal= $precioFinal+10;
        }
        return $precioFinal;
    }

}