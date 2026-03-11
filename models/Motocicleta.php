<?php

class Motocicleta extends Vehiculo{

    protected $cilindrada;

    public function __construct($id, $marca, $modelo, $matricula, $precioDia,$cilindrada)
    {
        parent::__construct($id, $marca, $modelo, $matricula, $precioDia);
        
        $this->cilindrada=$cilindrada;
    }

}