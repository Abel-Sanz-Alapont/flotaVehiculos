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


    /**
     * Get the value of cilindrada
     */
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * Set the value of cilindrada
     */
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;
    }

    /**
     * Get the value of incluyeCasco
     */
    public function getIncluyeCasco()
    {
        return $this->incluyeCasco;
    }

    /**
     * Set the value of incluyeCasco
     */
    public function setIncluyeCasco($incluyeCasco)
    {
        $this->incluyeCasco = $incluyeCasco;

    }
}